<p align="center">
  <a href="https://gitlab.com/yoan.bernabeu/grerandobot">
    <img src="logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">GreRandoBot</h3>

  <p align="center">
    A bot that tweets ideas for hikes in the massifs around Grenoble!
</p>



## About The Project

A bot that tweets ideas for hikes in the massifs around Grenoble!

It uses **Open Data**
3 provided by [Grenoble Alpes Métropole](https://data.metropolegrenoble.fr/ckan/dataset/balades-dans-les-massifs-autour-de-grenoble/resource/6404a8f4-e61f-4b79-93d1-e4bd71dedc26).

The data comes initially from the site [grenoble-montagne.com](https://www.grenoble-montagne.com/)

### Built With

* [Symfony](https://symfony.com/)
* [TwitterOAuth](https://twitteroauth.com/)



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

Lists of things needed :
* Php 7.4
* Symfony CLI
* Composer 2.0

### Installation

1. Clone the repo
   ```sh
   git clone https://gitlab.com/yoan.bernabeu/grerandobot.git
   ```
2. Install PHP packages
   ```sh
   composer install
   ```
3. Set your Twitter Key and Token in .env.local
   ```env
    # TWITTER CHANNEL
    TWITTER_CONSUMER_KEY=
    TWITTER_CONSUMER_SECRET=
    TWITTER_ACCESS_TOKEN=
    TWITTER_ACCESS_TOKEN_SECRET=
   ```



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Merge Request



<!-- LICENSE -->
## License

Distributed under the MIT License. See [LICENCE](LICENSE) for more information.



<!-- CONTACT -->
## Contact

Yoan Bernabeu - [@yOyO38](https://twitter.com/yOyO38) - contact@yoandev.co

Project Link: [https://gitlab.com/yoan.bernabeu/grerandobot](https://gitlab.com/yoan.bernabeu/grerandobot)