# Mars Rover PHP

## Requirements

* You are given the initial starting point (x,y) of a rover and the direction (N,S,E,W)
it is facing.
* The rover receives a collection of commands. (E.g.) FFRRFFFRL
* The rover can move forward (f).
* The rover can move left/right (l,r).
* Suppose we are on a really weird planet that is square. 200x200 for example :)
* Implement obstacle detection before each move to a new square. If a given
sequence of commands encounters an obstacle, the rover moves up to the last
possible point, aborts the sequence and reports the obstacle.

## Setup

### Clone repository

```terminal
git clone https:\\github.com\gnovaro\mars-rover-php
```

### Run Composer

```terminal
composer install
```