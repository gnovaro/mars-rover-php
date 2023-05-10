<?php

class Rover {
    private int $x;
    private int $y;
    private string $direction;
    private array $obstacles;
    
    public function __construct(int $x, int $y, string $direction, array $obstacles) {
        $this->x = $x;
        $this->y = $y;
        $this->direction = $direction;
        $this->obstacles = $obstacles;
    }
    
    public function executeCommands(string $commands): string {
        foreach (str_split($commands) as $command) {
            if ($command == 'f') {
                if (!$this->moveForward()) {
                    return "Obstacle detected at ($this->x, $this->y)";
                }
            } elseif ($command == 'l') {
                $this->turnLeft();
            } elseif ($command == 'r') {
                $this->turnRight();
            }
        }
        return "Rover arrived at ($this->x, $this->y), facing $this->direction";
    }
    
    private function moveForward(): bool {
        $new_x = $this->x;
        $new_y = $this->y;
        
        if ($this->direction == 'N') {
            $new_y--;
        } elseif ($this->direction == 'S') {
            $new_y++;
        } elseif ($this->direction == 'E') {
            $new_x++;
        } elseif ($this->direction == 'W') {
            $new_x--;
        }
        
        if ($this->hasObstacle($new_x, $new_y)) {
            return false;
        } else {
            $this->x = $new_x;
            $this->y = $new_y;
            return true;
        }
    }
    
    private function hasObstacle(int $x, int $y): bool {
        foreach ($this->obstacles as $obstacle) {
            if ($obstacle[0] === $x && $obstacle[1] === $y) {
                return true;
            }
        }
        return false;
    }
    
    private function turnLeft(): void {
        if ($this->direction == 'N') {
            $this->direction = 'W';
        } elseif ($this->direction == 'S') {
            $this->direction = 'E';
        } elseif ($this->direction == 'E') {
            $this->direction = 'N';
        } elseif ($this->direction == 'W') {
            $this->direction = 'S';
        }
    }
    
    private function turnRight(): void {
        if ($this->direction == 'N') {
            $this->direction = 'E';
        } elseif ($this->direction == 'S') {
            $this->direction = 'W';
        } elseif ($this->direction == 'E') {
            $this->direction = 'S';
        } elseif ($this->direction == 'W') {
            $this->direction = 'N';
        }
    }
}
