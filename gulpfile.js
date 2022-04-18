var gulp = require('gulp'),
	concat = require('gulp-concat'),
	plumber = require('gulp-plumber'),
	sourcemaps = require('gulp-sourcemaps'),
	livereload = require('gulp-livereload'),
	autoprefixer = require('gulp-autoprefixer');
minify = require('gulp-minify');
const sass = require('gulp-sass')(require('sass'));


gulp.task('sass', function(done) {
	gulp.src('./scss/*.scss')
			.pipe(sourcemaps.init())
	.pipe(plumber())
	.pipe(sass({
		outputStyle: 'compressed'
	}))
		.pipe(autoprefixer('last 2 version'))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./'))
		.pipe(livereload());
		done();
});

gulp.task('concat', function() {
  return gulp.src('js/*.js')
    .pipe(concat('script.js'))
    .pipe(gulp.dest('js'));
});



gulp.task('compress', function() {
  return gulp.src(['js/script.js'])
    .pipe(minify())
    .pipe(gulp.dest('js'))

});



gulp.task('watch', function() {
	livereload.listen();
	gulp.watch('scss/*.scss', gulp.series('sass'));
	// gulp.watch('js/**/*.js', gulp.series('js'));
	gulp.watch('**/*.php').on('change', livereload.changed);
});


gulp.task('js', gulp.series('concat','compress'));
gulp.task('default', gulp.series('sass','watch'));