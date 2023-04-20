const form = document.querySelector('.modal-form');

form.addEventListener('submit1', async (event) => {
  event.preventDefault(); // prevent default form submission

  const name = form.elements.name.value;
  const email = form.elements.email.value;
  const date = form.elements.date.value;

  // Call function to send email with data
  await sendEmail(name, email, date);
});
async function sendEmail(name, email, date) {
    const response = await fetch('https://api.emailjs.com/api/v1.0/email/send', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        service_id: 'service_fsd0eai',
        template_id: 'template_w54csru',
        user_id: 'gttwgtw5jokUZHCCS',
        template_params: {
          name: name,
          email: email,
          date: date
        }
      })
    });
  
    if (response.ok) {
      console.log('Email sent!');
    } else {
      console.error('Error sending email:', response.statusText);
    }
  }
  const modalBtn = document.querySelector('#modal-btn');
  const modal = document.querySelector('#modal');
  const overlay = document.querySelector('.modal-overlay');
  const closeBtn = document.querySelector('#close-btn');
  
  modalBtn.addEventListener('click', () => {
    modal.classList.add('open');
    overlay.classList.add('open');
  });
  
  closeBtn.addEventListener('click', () => {
    modal.classList.remove('open');
    overlay.classList.remove('open');
  });
    