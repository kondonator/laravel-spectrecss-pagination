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

mix.styles(['node_modules/spectre.css/dist/spectre.min.css','node_modules/spectre.css/dist/spectre-icons.min.css','node_modules/spectre.css/dist/spectre-exp.min.css'], 'public/css/spectre.css');
