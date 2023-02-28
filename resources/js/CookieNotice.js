export default class CookieNotice
{
    constructor()
    {
        let form = document.getElementById("cookie-notice-form");
        if (form) {
            form.addEventListener("submit", this.#submit);
        }
    }

    async #submit(event)
    {
        event.preventDefault();

        let form = event.currentTarget;
        let formData = new FormData(form);

        let response = await fetch(form.action, {method: "POST", body: formData});
        if (response.ok) {
            document.getElementById("cookie-notice-container").remove();
        }
    }
}
