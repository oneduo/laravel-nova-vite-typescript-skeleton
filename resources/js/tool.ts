import Tool from "./pages/Tool.vue"
import "../css/tool.css"

// @ts-ignore
window.Nova.booting((app: any, store: any) => {
  // @ts-ignore
  window.Nova.inertia("ToolTemplate", Tool)
})
