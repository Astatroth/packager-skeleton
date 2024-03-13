import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue2';

export default defineConfig({
    plugins: [
        laravel({
            /*buildDirectory: './public',
            hotFile: './public/hot',*/
            input: [
                './resources/js/datatable.js',
                './resources/css/datatable.scss'
            ],
            refresh: true
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        })
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm.js'
        }
    },
    publicDir: 'public',
    build: {
        assetsDir: '',
        emptyOutDir: true,
        copyPublicDir: false
    }
});
