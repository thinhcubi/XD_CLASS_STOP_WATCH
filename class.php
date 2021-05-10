<?php
class StopWatch{
    private  $startTime;
    private  $endTime;
    public function __construct(){
        $this->startTime = round(microtime(true)*1000);
    }
    public function getEndTime(){
        return $this->endTime;
    }
    public function getStartTime(){
        return $this->startTime;
    }
    public function start(){
        return $this->startTime;
    }
    public function stop(){
        return $this->endTime = round(microtime(true)*1000);
    }
    public function getElapsedTime() {
        return $this->stop() - $this->start();
    }
}

