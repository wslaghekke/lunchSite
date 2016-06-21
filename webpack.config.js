var webpack = require('webpack');
var ExtractTextPlugin = require("extract-text-webpack-plugin");

module.exports = {
    entry: './assets/app.js',
    output: {
        path: 'web/assets/',
        filename: 'bundle.js',
        publicPath: '/assets/'
    },
    plugins: [
        new ExtractTextPlugin("[name].css", {  allChunks: true }),
        new webpack.NoErrorsPlugin()
    ],
    module: {
        loaders: [
            {
                loader: 'file?name=[name].[ext]',
                test: /\.png($|\?)|\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/
            },
            {
                loader: ExtractTextPlugin.extract('style-loader', 'css-loader?sourceMap!less-loader?sourceMap'),
                test: /\.less$/
            }
        ]
    }
};