var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var sourcemaps =  require('gulp-sourcemaps');


gulp.task('sass', function() {
	return gulp.src('sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('.'))
})

gulp.task('watch', function () {
  gulp.watch('sass/**/*.scss', gulp.series('sass'))
})

gulp.task('default', gulp.parallel('watch'));
