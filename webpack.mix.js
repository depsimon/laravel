const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('autoprefixer'),
        require('postcss-import'),
        require('postcss-nested'),
        require('postcss-url'),
        require('tailwindcss'),
    ]);

if (!mix.isProd) {
    mix
    .browserSync({
        notify: false,
        open: false,
        proxy: __dirname.split('/').pop() + '.test',
    })
 }
