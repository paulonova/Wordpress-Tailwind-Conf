# Wordpress com configuracao do TailwindCss v4

## SETTINGS

* Install Tailwindcss/cli

```
npm install tailwindcss @tailwindcss/cli

```

* Create a src/input.css  and write:

```
/*
Theme Name: Name of theme
Description: A description here
Version: 1.0
Author: Paulo Vila Nova
*/

@import "tailwindcss";
@config "../tailwind.config.js";

```

* In package.json write the script to run the css from Tailwind:

```
"scripts": {
    "build-css": "npx tailwindcss -i ./src/input.css -o ./style.css --watch",
  },

```