module.exports = {
  mode: 'jit',
  purge: {
    content: ["./_views/**/*.twig", './safelist.txt'],
  },
  theme: {
    screens: {
      "2xs": "375px",
      xs: "480px",
      sm: "600px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1400px",
      "nav": "1500px",
      "3xl": "1600px",
      "4xl": "1900px",
    },
    fontFamily: {
      body: ["Inter", "sans-serif"],
      primary: ["Rubik", "sans-serif"],
    },
    filter: {
      none: "none",
      grayscale: "grayscale(1)",
    },
    extend: {
      colors: {
        primary: {
          DEFAULT: "#FB6C55",
          dark: "#a41a03",
        },
        secondary: {
          light: "#C2C2C2",
          DEFAULT: "#333333",
          dark: "#000",
        },
      },
      spacing: {
        72: "18rem",
        84: "21rem",
        96: "24rem",
        128: "32rem",
      },
      zIndex: {
        "-10": "-10",
        "-20": "-20",
      },
      inset: (theme, { negative }) => ({
        full: "100%",
        "1/2": "50%",
        ...theme("spacing"),
        ...negative(theme("spacing")),
      }),
      maxWidth: (theme) => ({
        ...theme("spacing"),
      }),
      minHeight: (theme) => ({
        ...theme("spacing"),
        25: "25vh",
        50: "50vh",
        75: "75vh",
      }),
      screens: {
        'landscape': {'raw': '(orientation: landscape)'},
      },
    },
  },
  variants: {
    backgroundColor: ['responsive', 'group-hover', 'hover', 'focus', 'group-focus'],
    textColor: ['responsive', 'group-hover', 'hover', 'focus', 'group-focus'],
    padding: ['responsive', 'group-hover', 'hover', 'focus', 'group-focus'],
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
  corePlugins: {
    container: false,
  },
};
