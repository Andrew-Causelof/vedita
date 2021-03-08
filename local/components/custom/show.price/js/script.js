window.addEventListener('DOMContentLoaded', () =>{
      document.querySelectorAll('.price-grid__row').forEach(tr => {
        tr.addEventListener('click', (e) => {
            e.target.parentElement.classList.toggle('chosen');
        });
      });
});
