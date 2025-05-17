const emoji = {
    heart: '❤️',
    fire: '🔥',
    rocket: '🚀',
}

const divReactionItems = document.querySelector('#reaction-items');
const reactionItemsId = divReactionItems.getAttribute('data-id');

const btns = document.querySelectorAll('.reaction-item-btn');

btns.forEach(btn => {
    btn.addEventListener('click', () => {

        const id = btn.getAttribute('id')
        // console.log(btn.getAttribute('id'));

        window.axios.post('/reaction', {
            reaction: id,
            userId: reactionItemsId,
        })

        const el = addIcon(btn, id);
        addIconEvent(el);
    })
})

function addIcon(btn, reaction) {

    const el = document.createElement('span');
    el.classList.add('reaction-icon-anim');
    el.innerHTML = emoji[reaction];
    const parent = btn.parentNode;
    parent.appendChild(el);
    return el;
}

function addIconEvent(el) {
    el.addEventListener('animationend', removeIcon);
}

function removeIcon() {
    // console.log('animationend ', this);
    this.remove();
    // this.removeEventListener('animationend', removeIcon);
}

window.Echo.channel('reaction')
    .listen('ReactionEvent', (e) => {
        // console.log(e);
        if (reactionItemsId != e.userId) {
            const btn = document.getElementById(e.reaction);
            addIcon(btn, e.reaction);
        }
    })


