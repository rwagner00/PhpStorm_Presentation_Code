<?php

/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 8/7/16
 * Time: 3:56 PM
 */
class RaceCar extends Vehicle {
  private $RaceCarEngine;
  private $RaceCarSeats;
  private $RaceCarEngineSize;
  private $RaceCarTopSpeed;
  private $RaceCarDoors;
  private $RaceCarWheelSize;
  private $RaceCarTireSize;
  private $RaceCarFuelMileage;
  private $RaceCarDriveTrain;

  /**
   * @return mixed
   */
  public function getRaceCarEngine() {
    return $this->RaceCarEngine;
  }

  /**
   * @param mixed $RaceCarEngine
   */
  public function setRaceCarEngine($RaceCarEngine) {
    $this->RaceCarEngine = $RaceCarEngine;
  }

  /**
   * @return mixed
   */
  public function getRaceCarSeats() {
    return $this->RaceCarSeats;
  }

  /**
   * @param mixed $RaceCarSeats
   */
  public function setRaceCarSeats($RaceCarSeats) {
    $this->RaceCarSeats = $RaceCarSeats;
  }

  /**
   * @return mixed
   */
  public function getRaceCarEngineSize() {
    return $this->RaceCarEngineSize;
  }

  /**
   * @param mixed $RaceCarEngineSize
   */
  public function setRaceCarEngineSize($RaceCarEngineSize) {
    $this->RaceCarEngineSize = $RaceCarEngineSize;
  }

  /**
   * @return mixed
   */
  public function getRaceCarTopSpeed() {
    return $this->RaceCarTopSpeed;
  }

  /**
   * @param mixed $RaceCarTopSpeed
   */
  public function setRaceCarTopSpeed($RaceCarTopSpeed) {
    $this->RaceCarTopSpeed = $RaceCarTopSpeed;
  }

  /**
   * @return mixed
   */
  public function getRaceCarDoors() {
    return $this->RaceCarDoors;
  }

  /**
   * @param mixed $RaceCarDoors
   */
  public function setRaceCarDoors($RaceCarDoors) {
    $this->RaceCarDoors = $RaceCarDoors;
  }

  /**
   * @return mixed
   */
  public function getRaceCarWheelSize() {
    return $this->RaceCarWheelSize;
  }

  /**
   * @param mixed $RaceCarWheelSize
   */
  public function setRaceCarWheelSize($RaceCarWheelSize) {
    $this->RaceCarWheelSize = $RaceCarWheelSize;
  }

  /**
   * @return mixed
   */
  public function getRaceCarTireSize() {
    return $this->RaceCarTireSize;
  }

  /**
   * @param mixed $RaceCarTireSize
   */
  public function setRaceCarTireSize($RaceCarTireSize) {
    $this->RaceCarTireSize = $RaceCarTireSize;
  }

  /**
   * @return mixed
   */
  public function getRaceCarFuelMileage() {
    return $this->RaceCarFuelMileage;
  }

  /**
   * @param mixed $RaceCarFuelMileage
   */
  public function setRaceCarFuelMileage($RaceCarFuelMileage) {
    $this->RaceCarFuelMileage = $RaceCarFuelMileage;
  }

  /**
   * @return mixed
   */
  public function getRaceCarDriveTrain() {
    return $this->RaceCarDriveTrain;
  }

  /**
   * @param mixed $RaceCarDriveTrain
   */
  public function setRaceCarDriveTrain($RaceCarDriveTrain) {
    $this->RaceCarDriveTrain = $RaceCarDriveTrain;
  }


}
