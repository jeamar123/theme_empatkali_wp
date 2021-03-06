// PALLETE:    1. #38424b / rgb(56, 66, 75) (Very Dark Grayish Blue / Limed Spruce)
//             2. #98A2AB / rgb(152, 162, 171) (Dark Grayish Blue / Gray Chateau)

module.exports = {
  // purge: [],
  purge: {
    enabled: true,
    content: ['./*.php']
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    borderWidth: {
      default: '1px',
      '0': '0',
      '2': '2px',
      '4': '4px',
      '5': '5px',
      '8': '8px',
    },
    extend: {
    	colors: {
    		'c-primary': '#393c94',
    		'c-secondary': '#5b60e8',
        'c-F3F3F3': '#F3F3F3',
        'c-38424b': '#38424b',
        'c-98A2AB': '#98A2AB',
        'c-4D539C': '#4D539C',
        'c-6166A8': '#6166A8',
        'c-b0fce2': '#b0fce2',

        // commonly used on sliders, fuuuuuu
        'c-fbe521': '#fbe521',
        'c-3b3969': '#3b3969',
    	},
      screens: {
        '2xl': '1536px',
        '3xl': '1920px',
      },
      fontSize: {
        'mob-xxs': '7px',
        'xxs': '.65rem',
        'xxxs': '.35rem',
        'xsm': '.25rem',
        '5.5xl': '3.2rem',
      },
      margin: {
        '-28': '-9rem',
      }
    },
  },
  variants: {
    textColor: ['group-hover'],
    textOpacity: ['group-hover'],
    opacity: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    margin: ['responsive', 'hover', 'first', 'last'],
    borderWidth: ['responsive', 'first', 'last'],
  },
  plugins: [],
}
