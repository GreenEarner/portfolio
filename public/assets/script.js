const goTag=document.querySelector(".goTop");
const navUpDown = document.querySelector('.navUpDown');
window.addEventListener("scroll", ()=>{
    if (window.pageYOffset>100) {
        navUpDown.classList.add('py-2');
        goTag.classList.remove("d-none");
    } else {
        navUpDown.classList.remove('py-2');
        goTag.classList.add("d-none");
    }
});


const menuContainerTag = document.querySelector('.menuContainer');
const line1Tag = document.querySelector('.line1');
const line2Tag = document.querySelector('.line2');
const line3Tag = document.querySelector('.line3');
const overlayTag = document.querySelector('.overlay');

menuContainerTag.addEventListener("click", ()=>{
    if (menuContainerTag.classList.contains("opened")) {
        line2Tag.classList.remove("remove")
        line1Tag.classList.remove("line1Deg")
        line3Tag.classList.remove("line3Deg")
        menuContainerTag.classList.remove("opened");
        overlayTag.classList.remove("opacityAndZindex")
    } else {
        line2Tag.classList.add("remove")
        line1Tag.classList.add("line1Deg")
        line3Tag.classList.add("line3Deg")
        menuContainerTag.classList.add("opened")
        overlayTag.classList.add("opacityAndZindex")
    }
});

let linkTags = document.querySelectorAll('.overlay-link');

for (let i = 0; i < linkTags.length; i++) {

    let linkTag = linkTags[i];
    linkTag.addEventListener('click', () => {
        line2Tag.classList.remove("remove")
        line1Tag.classList.remove("line1Deg")
        line3Tag.classList.remove("line3Deg")
        menuContainerTag.classList.remove("opened");
        overlayTag.classList.remove("opacityAndZindex")
    })

}

$('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration: 10000,
    //gap in pixels between the tickers
    // gap: 50,
    gap: 500,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 1000,
    //'left' or 'right'
    direction: 'left',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true
});
$(".marquee span:last-child").after("<span></span>");



// feature

const features = [
    {
        id: 1,
        image: 'https://res.cloudinary.com/dtxspsxia/image/upload/v1664514914/greenearner/icons/icon-1_f5hvcv.png',
        title: 'Natural Process',
        content: 'Wood stove tend to generate excess smoke into the air which is harmful for the health of your entire family. Instead you can cook food on energy efficient appliances that promises low cost and quick cooking too.'
    },
    {
        id: 2,
        image: 'https://res.cloudinary.com/dtxspsxia/image/upload/v1664514914/greenearner/icons/icon-3_pq0oit.png',
        title: 'Organic Products',
        content: "It is always advisable to eliminate maximum household chemicals and pesticides that directly pollute the green environment. Instead you can make your own solutions for cleaning purpose using distilled vinegar, lemon and baking soda. There are many ‘green’cleaning products available in the market that is environmentally friendly and conventional cleaners too."
    },
    {
        id: 3,
        image: 'https://res.cloudinary.com/dtxspsxia/image/upload/v1664514914/greenearner/icons/icon-2_atqm2f.png',
        title: 'Biologically Safe',
        content: "Many waste products like glass, plastics, aluminum and paper can be recycled instead of been disposed off in the dustbin. This will prevent any air pollution accumulated on burning these products. You can also use reusable towels and reusable bags ratherthan using disposable plastics or bags."
    },

];

const insertFeatures = document.querySelector('.insertFeatures');

let featureDelayNumber = 0;
for (let i = 0; i < features.length; i++) {
    featureDelayNumber += 100;
    let feature = `
    <div class="col-md-6 col-lg-4 px-3 py-2">
        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="${featureDelayNumber}" class="card h-100 text-center px-3 py-4 fs border border-0 shadow">
            <div class="my-3">
                <img src="${features[i].image}" alt="">
            </div>
            <h4 class="my-4">${features[i].title}</h4>
            <div class="mb-4 featureContentAnimation featureContent${i}">
                ${features[i].content.slice(0, 120)}
            </div>
            <div class="featureBtn${i} d-flex justify-content-center align-items-end h-100">
                <a href="feature/${features[i].title}" class="button text-dark d-flex justify-content-center align-items-center text-decoration-none mt-3">Read More</a>
            </div>
        </div>
    </div>
    `;
    insertFeatures.innerHTML += feature;
}

// focusFeature = (index) => {
//    const tag = document.querySelector(`.featureContent${index}`)
//    tag.textContent = features[index].content

//    const btn = document.querySelector(`.featureBtn${index}`);
//    btn.innerHTML = `<button class="button mt-3" onclick="normalFeature(${index})">Read Less</button>`
// }

normalFeature = (index) => {
    const tag = document.querySelector(`.featureContent${index}`)
    tag.textContent = features[index].content.slice(0, 120)

    const btn = document.querySelector(`.featureBtn${index}`);
    btn.innerHTML = `<button class="button mt-3" onclick="focusFeature(${index})">Read More</button>`
}


let materials = [
    {
        id: 1,
        category: 'bottle',
        image: 'https://res.cloudinary.com/dtxspsxia/image/upload/v1664512906/greenearner/materials/realistic-vector-icon-set-plastic-bottles-collection-big-small-different-shapes_134830-1304_zl8udl.webp',
        content: 'Often, people choose not to recycle because it is an extra step that doesn’t reap an instant reward. However, taking small steps to create good recycling habits in your daily life produces benefits that impact you far more than you likely realize.'
    },
    {
        id: 2,
        category: 'paper',
        image: 'https://res.cloudinary.com/dtxspsxia/image/upload/v1664512906/greenearner/materials/stack-old-newspapers-magazines_1101-762_f9f69e.webp',
        content: 'We need recycling for many reasons. But most importantly, it will help us to save our planet. Besides, recycling saves the earth by facilitating the reprocess of paper which will save millions of trees.'
    },
    {
        id: 3,
        category: 'bottle',
        image: 'https://res.cloudinary.com/dtxspsxia/image/upload/v1664512907/greenearner/materials/images_ypbw3m.jpg',
        content: 'Recycling is necessary if we want to protect this world for our prospect generations. We make new products from the old unused products. By reusing and not throwing your old products, you are actually recycling. Recycling, an old practice with numerous modern applications is significant to the natural environment as well as human beings. It refers to the revival and reuse of resources from spent products.'
    },
    {
        id: 4,
        category: 'plastic',
        image: 'https://res.cloudinary.com/dtxspsxia/image/upload/v1664512905/greenearner/materials/colored-cotton-eco-bags-fabric-tote-different-shapes-vector-realistic-mockup-textile-reusable-ecobags-shopping-beach-with-handles-blank-labels-isolated-white-background_107791-9374_k5e1fb.webp',
        content: 'Recycling is the creative process of turning used products into new materials. It is a way of reducing waste materials that causes many problems to the environment. It is also a great way for us to be creative, it enhances our intellectual knowledge about building new things from something we never thought we can use again. Moreover, it is something we can do to save our environment from danger. Recycling is something that can reduce the use of energy, and great way of controlling air, water and land pollution.'
    },
    {
        id: 5,
        category: 'plastic',
        image: 'https://res.cloudinary.com/dtxspsxia/image/upload/v1664512905/greenearner/materials/images_1_nl2ajp.jpg',
        content: 'Recycling is a method of procedure that includes the collection and breaking down of waste material to create something new out of it. The process was introduced sot that the non-biodegradable materials can be melted or break down to create something useful. After the effects of global warming and pollution have become known to men the process of recycling has become more important.'
    },
    {
        id: 6,
        category: 'bottle',
        image: 'https://res.cloudinary.com/dtxspsxia/image/upload/v1664512905/greenearner/materials/download_ds0rzh.jpg',
        content: 'The human population is constantly growing and with that growth, come new minds whom have a vision for creating innovative products that will revolutionize the world. In the early 1970’s, there were two men with a vision who changed the athletic world forever. Phil Knight, a University of Oregon track student athlete, and his coach'
    },
    // {
    //     id: 7,
    //     category: 'paper',
    //     image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3Nf1_KkL_5x08-brewlSlHpi0zKeJTtwPqA&usqp=CAU',
    //     content: 'We need recycling for many reasons. But most importantly, it will help us to save our planet.We need recycling for many reasons. But most importantly, it will help us to save our planet.'
    // },
    // {
    //     id: 8,
    //     category: 'metal',
    //     image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpjcPVaMeBuJ0dfoEchor1Sgn_lKDewphKMQ&usqp=CAU',
    //     content: 'The human population is constantly growing and with that growth, come new minds whom have a vision for creating innovative products that will revolutionize the world. In the early 1970’s, there were two men with a vision who changed the athletic world forever. Phil Knight, a University of Oregon track student athlete, and his coach'
    // },
    // {
    //     id: 9,
    //     category: 'metal',
    //     image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM_ceRXAO917b-6tjtybE5H8Qc914-9lnOZQ&usqp=CAU',
    //     content: 'The human population is constantly growing and with that growth, come new minds whom have a vision for creating innovative products that will revolutionize the world. In the early 1970’s, there were two men with a vision who changed the athletic world forever. Phil Knight, a University of Oregon track student athlete, and his coach'
    // },
];

const insertMaterial = document.querySelector('.insertMaterial');
let materialDelayNumber = 0;
for (let i = 0; i < materials.length; i++) {
    materialDelayNumber += 100;
    if ( materialDelayNumber == 400 ) {
        materialDelayNumber = 100;
    }
    let material = `
    <div class="col-md-6 col-lg-4 p-2">
        <div class="card material-card h-100 border-0 shadow p-3 py-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="${materialDelayNumber}">
            <div class="p-3 material-img-container">
                <img class="w-100 h-100" src="${materials[i].image}" alt="">
            </div>
            <div class="fs text-center mt-4">
                ${materials[i].content.slice(0, 120)}
            </div>
        </div>
    </div>
    `;
    insertMaterial.innerHTML += material;
}

let originalCategories = [];
for (let i = 0; i < materials.length; i++) {
    originalCategories.push(materials[i].category);
}

// let filterByCategory = (category) => {
//     let materialsByCategory = category == 'all' ? materials : materials.filter( material => material.category == category);
//     insertMaterial.innerHTML = '';
//     for (let i = 0; i < materialsByCategory.length; i++) {
//         let material = `
//             <div class="col-md-6 col-lg-4 p-2">
//                 <div class="card h-100 border-0 shadow p-3 py-4" >
//                     <div class="p-3 material-img-container">
//                         <img class="w-100" src="${materialsByCategory[i].image}" alt="">
//                     </div>
//                     <div class="fs text-center mt-4">
//                         ${materialsByCategory[i].content}
//                     </div>
//                 </div>
//             </div>
//         `;
//         insertMaterial.innerHTML += material;
//     }
// }

const insertCategory =document.querySelector('.insertCategory');
let categories = [... new Set(originalCategories)];
for (let i = 0; i < categories.length; i++) {
    let categoryBtn = document.createElement("button");
    categoryBtn.classList.add('button', 'm-3', 'me-0', 'categoryBtn');
    categoryBtn.append(categories[i]);
    // categoryBtn.addEventListener('click', () => {
    //     filterByCategory(categories[i]);
    // })
    insertCategory.append(categoryBtn);
}


$('a[href^="#"]').click(function(){

    var the_id = $(this).attr("href");

    $('html, body').animate({
        scrollTop:$(the_id).offset().top
    }, 'slow');

    return false;});

