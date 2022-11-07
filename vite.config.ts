import vue from "@vitejs/plugin-vue"
import { resolve } from "path"
import { defineConfig } from "vite"

export default defineConfig({
  plugins: [vue()],

  root: "resources",

  build: {
    outDir: resolve(__dirname, "dist"),
    emptyOutDir: true,
    manifest: true,
    target: "es2018",
    minify: true,
    lib: {
      entry: resolve(__dirname, "resources/js/tool.ts"),
      name: "tool",
      formats: ["umd"],
      fileName: "js/tool",
    },
    rollupOptions: {
      input: resolve(__dirname, "resources/js/tool.ts"),
      external: ["vue", "Nova", "LaravelNova"],
      output: {
        globals: {
          vue: "Vue",
          nova: "Nova",
          "laravel-nova": "LaravelNova",
        },

        assetFileNames: "css/tool.css",
      },
    },
  },

  optimizeDeps: {
    include: ["vue", "@inertiajs/inertia", "@inertiajs/inertia-vue3", "axios"],
  },
})
