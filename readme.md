#Adventure: Project for CSS Grid

This is a simple website based on a design found online. (copyright issues? probably...)
It is a PHP Laravel project set up to work with a MYSQL database but at the moment has no database tables. 
On the front end it uses plain HTML, CSS Grid and Bootstrap 4 (Sass)

## Getting Started

After cloning the project, you should set up a database in your local environment and do that npm install thing.

### Prerequisites

Vagrant box

### Installing

- Clone the project
- Install composer dependencies:

```
composer install
```
- Run npm install:

```
npm install
```

- In the root of your project, copy env.example to .env:
```
cp .env.example .env
```

Then update it to include details such as app name, url name and the db name you choose

- Generate app key with php artisan:
```
php artisan key:generate
```

## Developing

It uses slick slider library for image carrousel on the homepage:
http://kenwheeler.github.io/slick/

### Building

You can run dev (build only) or watch to update automatically on save (build and watch) to build the project
```
npm run dev 
or
npm run watch
```

### Running Tests

No tests available a.t.m.

## Deployment

There are no additional notes about how to deploy this on a live system.

## Contributing

N/A a.t.m.
What does the developer need to know before contributing?
For instance; guidelines to make pull requests, code of conduct.
Link to GitFlow guidelines. Code style guides.
If there's a lot to consider, it's common to separate this into a CONTRIBUTING.md file.

## Versioning
N/A a.t.m.
Link to our versioning guidelines. Link to tagged versions of the repository.
