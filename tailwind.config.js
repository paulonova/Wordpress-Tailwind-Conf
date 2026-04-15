/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php", // Scans all PHP files in the theme
  ],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
                    "surface-container-lowest": "#ffffff",
                    "primary-fixed-dim": "#bac8d5",
                    "tertiary": "#895100",
                    "secondary-container": "#e9e1d7",
                    "on-tertiary-container": "#975900",
                    "primary": "#53606b",
                    "on-background": "#1a1c1c",
                    "surface-tint": "#53606b",
                    "surface-container-high": "#e8e8e8",
                    "on-primary-container": "#5c6a75",
                    "on-secondary-container": "#69645c",
                    "surface-container-highest": "#e2e2e2",
                    "on-error": "#ffffff",
                    "secondary-fixed-dim": "#cdc5bc",
                    "inverse-primary": "#bac8d5",
                    "on-secondary-fixed-variant": "#4a463f",
                    "on-tertiary-fixed-variant": "#683c00",
                    "surface-dim": "#dadada",
                    "tertiary-fixed-dim": "#ffb86d",
                    "on-secondary": "#ffffff",
                    "error-container": "#ffdad6",
                    "error": "#ba1a1a",
                    "surface": "#f9f9f9",
                    "surface-bright": "#f9f9f9",
                    "on-secondary-fixed": "#1e1b15",
                    "surface-container-low": "#f3f3f3",
                    "on-tertiary": "#ffffff",
                    "tertiary-container": "#ffe3ca",
                    "on-primary-fixed": "#101d26",
                    "on-surface": "#1a1c1c",
                    "on-tertiary-fixed": "#2c1600",
                    "secondary": "#635e56",
                    "secondary-fixed": "#e9e1d7",
                    "inverse-on-surface": "#f1f1f1",
                    "surface-container": "#eeeeee",
                    "tertiary-fixed": "#ffdcbd",
                    "inverse-surface": "#2f3131",
                    "primary-container": "#dceaf7",
                    "on-error-container": "#93000a",
                    "on-primary": "#ffffff",
                    "outline-variant": "#c4c7cb",
                    "on-primary-fixed-variant": "#3b4853",
                    "surface-variant": "#e2e2e2",
                    "on-surface-variant": "#43474b",
                    "primary-fixed": "#d6e4f1",
                    "background": "#f9f9f9"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Inter"],
                    "body": ["Inter"],
                    "label": ["Inter"]
            }
    },
  },
  plugins: [],
}