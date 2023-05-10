<?php

use PHPUnit\Framework\TestCase;

require_once '../src/Rover.php';

class RoverTest extends TestCase {
    public function testExecuteCommands() {
        $rover = new Rover(100, 100, 'N', [[101, 100], [100, 99]]);
        
        $result = $rover->executeCommands('FFRRFFFRL');
        $this->assertEquals("Obstacle detected at (100, 99)", $result);
        
        $result = $rover->executeCommands('FLFFFRFLFF');
        $this->assertEquals("Rover arrived at (102, 97), facing E", $result);
        
        $result = $rover->executeCommands('F');
        $this->assertEquals("Rover arrived at (100, 99), facing N", $result);
    }
}
