const obs = new IntersectionObserver((entries) => {
    console.log(entries); // Log entries to check if the observer is working
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenEle = document.querySelectorAll('.hidden');
hiddenEle.forEach((el) => obs.observe(el));


document.addEventListener('DOMContentLoaded', () => {
    const bodyChildren = document.body.children;

    if (bodyChildren.length > 0) {
        console.log('The body has children.');
    } else {
        console.log('The body does not have any children.');
    }
});
