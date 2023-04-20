const form = document.getElementById('tracker');
const results = document.querySelector('.results');
const nextStartDate = document.querySelector('#next-start-date');
const cycleDay = document.querySelector('#cycle-day');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    const startDate = new Date(document.querySelector('#start-date').value);
    const cycleLength = parseInt(document.querySelector('#cycle-length').value);
    const periodLength = parseInt(document.querySelector('#period-length').value);

    const nextPeriodStartDate = new Date(startDate.getTime() + cycleLength * 24 * 60 * 60 * 1000);
    nextStartDate.textContent = nextPeriodStartDate.toLocaleDateString();

    const today = new Date();
    const daysPassed = Math.floor((today.getTime() - startDate.getTime()) / (24 * 60 * 60 * 1000));
    const daysLeft = cycleLength - daysPassed % cycleLength;
    cycleDay.textContent = daysPassed % cycleLength + 1;

    results.style.display = 'block';
});
const modalBtn = document.getElementById('modal-btn');
const modal = document.getElementById('modal');
const modalOverlay = document.getElementById('modal-overlay');
const closeBtn = document.getElementById('close-btn');

modalBtn.addEventListener('click', () => {
    modal.style.display = 'block';
    modalOverlay.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
    modalOverlay.style.display = 'none';
});

modalOverlay.addEventListener('click', () => {
    modal.style.display = 'none';
    modalOverlay.style.display = 'none';
});

