
const likeForm = document.querySelector('#like-form');
// kun like form lähetetään
likeForm.addEventListener('submit', async (evt) => {
    evt.preventDefault()
    // hae postin id (input hidden)
    const postId = document.querySelector('#post_id').value;
    // lähetä id ajaxilla (muista action)
    const url = likeButton.ajax_url;
    const data = new URLSearchParams({
        action: 'add_like',
        post_id: postId,
    });
    const response = await fetch(url, {
        method: 'POST',
        body: data,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
    });
    const like = await response.text();
    console.log(like);
    likeForm.innerHTML = like;
})
