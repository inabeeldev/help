<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/assets/img/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/img/favicon-16x16.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/assets/img/favicon.png') }}">
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>Stride HTML Template - Frontpage one</title>
  <link rel="stylesheet" href="{{ asset('public/assets/css/theme.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css">


  <style>
    /* inter-300 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-300.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-300.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-500.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-500.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-700.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-700.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }
  </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll">

    <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
        <div class="container">
          <a class="navbar-brand pe-4 fs-4" href="{{ url('/') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-layers-half"
              viewbox="0 0 16 16">
              <path
                d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
            </svg>
            <span class="ms-1 fw-bolder">Support</span>
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}" aria-label="Brings you to the frontpage">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/help') }}">
                  Help
                </a>
              </li>
            </ul>


          </div>
        </div>
      </nav>

  <main>

    <div class="w-100 overflow-hidden bg-gray-100" id="faq">

      <div class="container">
        <div class="row d-flex justify-content-center">

          <div class="col-lg-10 py-vh-6 mt-3">
            <h2 class="text-center">Frequently Asked Questions</h2>

             <!-- Search Button -->
          <div class="input-group mb-3 mt-4">
            <input type="text" class="form-control" id="searchInput" placeholder="Search FAQs" aria-label="Search FAQs"
              aria-describedby="button-addon2">
          </div>

            <!-- Accordion -->
            <div id="accordion" class="accordion">


              {{-- Dynamic js data here --}}

            </div>

          </div>

        </div>
      </div>

    </div>

  </main>

  <footer class="fixed-bottom d-lg-none d-md-none">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid" style="display: block">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <a class="nav-link" href="{{ url('/') }}">
                        <i class="fas fa-home fa-lg"></i> <!-- Added 'fa-lg' class -->
                        <div class="small">Home</div>
                    </a>
                </div>
                <div class="col-6 text-center">
                    <a class="nav-link" href="{{ url('/help') }}">
                        <i class="fas fa-question-circle fa-lg"></i> <!-- Added 'fa-lg' class -->
                        <div class="small">Help</div>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</footer>




  {{-- <footer>
    <div class="container small border-top">

    </div>

    <div class="container text-center py-3 small">Website development by <a href="https://apnadevs.com">ADevs</a>
    </div>
  </footer> --}}

  <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
  {{-- <script src="{{ asset('public/assets/js/aos.js') }}"></script> --}}
  <script>
    AOS.init({
      duration: 800, // values from 0 to 3000, with step 50ms
    });
  </script>

  <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
    const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");

    window.addEventListener('scroll', function () {
      scrollpos = window.scrollY;

      if (scrollpos >= header_height) { add_class_on_scroll(); }
      else { remove_class_on_scroll(); }

      console.log(scrollpos);
    })
  </script>


<script>
    // Sample FAQ data
    const faqs = [
      { question: "What is Lorem Ipsum?", answer: "Lorem Ipsum is simply dummy text of the printing and typesetting industry." },
      { question: "Why do we use it?", answer: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout." },
      { question: "Where does it come from?", answer: "Contrary to popular belief, Lorem Ipsum is not simply random text." },
      { question: "Where can I get some?", answer: "There are many variations of passages of Lorem Ipsum available." },
      { question: "Is it useful for designers?", answer: "Yes, Lorem Ipsum is widely used as a placeholder text in design mockups." },
      { question: "What is the capital of France?", answer: "The capital of France is Paris." },
      { question: "How many continents are there?", answer: "There are seven continents in the world." },
      { question: "What is the tallest mountain on Earth?", answer: "Mount Everest is the tallest mountain on Earth." },
      { question: "Who wrote the play 'Romeo and Juliet'?", answer: "William Shakespeare wrote the play 'Romeo and Juliet'." },
      { question: "Who is Nabeel?", answer: "Nabeel is a Laravel developer." }
    ];

    // Function to generate FAQ items
    function generateFAQs(faqs) {
      const accordion = document.getElementById('accordion');
      accordion.innerHTML = '';

      faqs.forEach((faq, index) => {
        const faqItem = `
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading${index}">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse${index}" aria-expanded="false" aria-controls="collapse${index}">
                ${faq.question}
              </button>
            </h2>
            <div id="collapse${index}" class="accordion-collapse collapse" aria-labelledby="heading${index}"
              data-bs-parent="#accordion">
              <div class="accordion-body">
                ${faq.answer}
              </div>
            </div>
          </div>
        `;
        accordion.innerHTML += faqItem;
      });
    }

    // Initial generation of FAQ items
    generateFAQs(faqs);

    // Function to filter FAQs based on search input
    function filterFAQs(searchText) {
      const filteredFAQs = faqs.filter(faq =>
        faq.question.toLowerCase().includes(searchText.toLowerCase()) ||
        faq.answer.toLowerCase().includes(searchText.toLowerCase())
      );
      generateFAQs(filteredFAQs);

      // Expand the first matched accordion item
      const firstMatchedAccordionItem = document.querySelector('.accordion-item:first-child');
      if (firstMatchedAccordionItem) {
        firstMatchedAccordionItem.querySelector('.accordion-button').click();
      }
    }

    // Live search functionality
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function () {
      const searchText = this.value.trim();
      filterFAQs(searchText);
    });
  </script>


</body>

</html>
