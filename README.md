
# My SCSS Plugin

This WordPress plugin enables you to use SCSS for styling, allowing for more organized and maintainable stylesheets. It includes a simple system for adding and compiling SCSS files.

## Getting Started

Before you begin, ensure you have [Node.js](https://nodejs.org/) installed on your system, as it's required for using Sass, the SCSS compiler.

### Installing Sass

Sass is a preprocessor scripting language that is interpreted or compiled into Cascading Style Sheets (CSS). Install Sass globally by running the following command in your terminal:

```bash
npm install -g sass
```

## Compiling SCSS Files

To compile your SCSS files into CSS:

1. Navigate to the root directory of the plugin in your terminal.

2. Run the following command:

   ```bash
   sass scss:css --watch
   ```

   This command tells Sass to watch your `scss` directory and compile the SCSS files into the `css` directory.

3. Keep the terminal open while working on your SCSS files. Sass will automatically compile the files every time you save.

## Adding New SCSS Files

To add a new SCSS file:

1. Create a new `.scss` file in the `scss` folder.

2. If the new file is a partial (a file that will be imported into others), name it with a leading underscore, e.g., `_buttons.scss`.

3. To include the new SCSS file in the compilation, import it into your main SCSS file (usually `style.scss`) using:

   ```scss
   @import 'path/to/your/newfile';
   ```

   Replace `path/to/your/newfile` with the actual path to your new SCSS file.

## Structure of the SCSS Folder

- `base/`: Contains basic styling, like resets and typography.
- `components/`: For individual components, like buttons, cards, etc.
- `layouts/`: Styling for larger layout components, like header, footer, etc.
- `pages/`: Page-specific styling.
- `utils/`: Utility files like variables, mixins, functions.
- `style.scss`: Main SCSS file that imports all other files.

## Best Practices

- Keep your SCSS files modular and organized.
- Use partials for components and elements that are reused.
- Comment your code where necessary for clarity.

## Troubleshooting

If you encounter any issues with Sass compilation, check the terminal for error messages. These messages can help identify syntax errors or other issues in your SCSS files.
