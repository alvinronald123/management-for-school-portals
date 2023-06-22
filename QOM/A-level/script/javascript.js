window.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.links a');
  
    links.forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        const linkURL = this.getAttribute('href');
        links.forEach(function(link) {
          link.classList.remove('selected');
        });
        this.classList.add('selected');
        setTimeout(function() {
          window.location.href = linkURL; // Redirect to the PHP link
        }, 100); // Delay the redirection slightly to ensure the 'selected' class is applied
      });
    });
  
    // Check if the current page URL matches any of the link URLs and add 'selected' class
    const currentURL = window.location.href;
    links.forEach(function(link) {
      const linkURL = link.getAttribute('href');
      if (currentURL.includes(linkURL)) {
        link.classList.add('selected');
      }
    });
  });
  