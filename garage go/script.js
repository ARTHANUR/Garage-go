
const timeline = gsap.timeline( )
timeline.to('.shutter',{duration:2 , y:'-100%' , delay: 2 , ease:'bounce.out'})
timeline.from('.register',{duration:1 , x:'-100% ' , opacity:0  , delay:0 , ease: 'elastic' } , 3.2)
timeline.from('.old-car' , { duration:1 , scale:0 , x:'-100%' , ease:'power3'},3.2)
timeline.from('.nav-bar',{duration:1 , y:'-100%' , ease:'slow'},'<.5')
timeline.from('.home-nav' , { duration:.5 , opacity :0} , '<.5')
timeline.from('.contact-nav' , { duration:.5 , opacity :0} , '<.5')
timeline.from('.about-nav' , { duration:.5 , opacity :0} , '<.5')
timeline.from('.main-login',{duration:1 , opacity:0 , scale:0},3.5)
timeline.to('.round-text' , {duration:20 , rotation:360 ,repeat:Infinity , ease:'power'} , 0)


// scroll animation of main page ,..................................................
// timeline.to('.lambo' , { scrollTrigger:'.lambo' ,start:'top top', x:500} ,3)
gsap.to('.lambo' , {
    scrollTrigger:{
        trigger:'.about-section',
        // start : "bottom center" ,
        scrub : true ,      
    },
    x:600 , 
    duration : 3 ,
    ease  : "slow" ,
    })

gsap.to('.round-text' , {
    scrollTrigger:{
        trigger:'.about-section',
        // start : "bottom center" ,
        scrub : true ,   
    },
    x:600 , 
    duration : 3 ,
})    

// gsap.to('.register-2' , {
//     scrollTrigger : {
//         trigger:'.about-section',
//         start : "bottom center" ,
//         scrub : true , 
//     },
//     x: 300 ,
//     duration :3 ,
// })

gsap.from('.card-item' , {
    scrollTrigger : {
                trigger:'.about-section',
                start : "top bottom" ,
                scrub : true , 
                
            },
            y : 300 ,
            opacity:0,
            duration : 1 ,
            stagger : .25,

})

gsap.to ('.van' , {
    scrollTrigger : {
        trigger : ".about-section" ,
        start : "center 30%" ,
        scrub : true ,
        // markers : true ,
        
    } ,
    x : 1100,
    ease : "slow" ,
    duration : 3 ,
})

// login page animations...........................
// timeline.fromto('.wheel' , {opacity:0 , scale:0 , rotation:720},{duration:3 , delay:1 , opacity:1 , scale:1 ,rotation:0})
gsap.from('.wheel',{duration:3  , x:'-60%'  , ease:'slow'} , 0)
gsap.to('.wheel ' , { duration:10,repeat:-1, delay:3 , rotation:360 ,})
gsap.from('.center-box', { duration:2 , delay:3 , x:'-10%', ease:'slow'})

gsap.from (".login-btn" ,{duration:1 ,opacity:0 , x:"2%" } , 5.5)
gsap.from(".signup-btn " , {duration:1 , opacity:0 , x:"2%"} , 5)
gsap.from(".e-login-btn " , {duration:1 , opacity:0 , x:"2%"} , 4.5)