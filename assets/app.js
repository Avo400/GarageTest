import './styles/app.css';

import Filter from './modules/Filter';
new Filter(document.querySelector('.js-filter'));
 
console.log('bonjour Avo');
import noUiSlider from 'nouislider';
import 'nouislider/dist/nouislider.css';

var priceSlider = document.getElementById('price-slider');
var kmsSlider = document.getElementById('kms-slider');
var yearSlider = document.getElementById('year-slider');

if (priceSlider) {
    const minPrice = document.getElementById('minPrice');
    const maxPrice = document.getElementById('maxPrice');
    const range = noUiSlider.create(priceSlider, {
        start: [minPrice.value || 1000 , maxPrice.value || 10000],
        connect: true,
        step: 200,
        range: {
            'min': 1000,
            'max': 10000
        }
    }); 
  
    range.on('slide', function (values, handle) {
        if (handle === 0) {
            minPrice.value = Math.round(values[0])
        }
        if (handle === 1) {
            maxPrice.value = Math.round(values[1])
        }

        console.log(values, handle)
    })
}

if (kmsSlider) {
    const minKms = document.getElementById('minKms');
    const maxKms = document.getElementById('maxKms');
    const range = noUiSlider.create(kmsSlider, {
        start: [minKms.value || 10000 , maxKms.value || 500000],
        connect: true,
        step: 200,
        range: {
            'min': 10000,
            'max': 500000
        }
    }); 
  
    range.on('slide', function (values, handle) {
        if (handle === 0) {
            minKms.value = Math.round(values[0])
        }
        if (handle === 1) {
            maxKms.value = Math.round(values[1])
        }

        console.log(values, handle)
    })
}


