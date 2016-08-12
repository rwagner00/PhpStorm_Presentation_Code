<?php

/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 8/7/16
 * Time: 3:55 PM
 */
class Sedan extends Car {
  private $CarEngine;
  private $CarSeats;
  private $CarEngineSize;
  private $CarTopSpeed;
  private $CarDoors;
  private $CarWheelSize;
  private $CarTireSize;
  private $CarFuelMileage;
  private $CarDriveTrain;

  /**
   * @return mixed
   */
  public function getCarEngine() {
    return $this->CarEngine;
  }

  /**
   * @param mixed $CarEngine
   */
  public function setCarEngine($CarEngine) {
    $this->CarEngine = $CarEngine;
  }

  /**
   * @return mixed
   */
  public function getCarSeats() {
    return $this->CarSeats;
  }

  /**
   * @param mixed $CarSeats
   */
  public function setCarSeats($CarSeats) {
    $this->CarSeats = $CarSeats;
  }

  /**
   * @return mixed
   */
  public function getCarEngineSize() {
    return $this->CarEngineSize;
  }

  /**
   * @param mixed $CarEngineSize
   */
  public function setCarEngineSize($CarEngineSize) {
    $this->CarEngineSize = $CarEngineSize;
  }

  /**
   * @return mixed
   */
  public function getCarTopSpeed() {
    return $this->CarTopSpeed;
  }

  /**
   * @param mixed $CarTopSpeed
   */
  public function setCarTopSpeed($CarTopSpeed) {
    $this->CarTopSpeed = $CarTopSpeed;
  }

  /**
   * @return mixed
   */
  public function getCarDoors() {
    return $this->CarDoors;
  }

  /**
   * @param mixed $CarDoors
   */
  public function setCarDoors($CarDoors) {
    $this->CarDoors = $CarDoors;
  }

  /**
   * @return mixed
   */
  public function getCarWheelSize() {
    return $this->CarWheelSize;
  }

  /**
   * @param mixed $CarWheelSize
   */
  public function setCarWheelSize($CarWheelSize) {
    $this->CarWheelSize = $CarWheelSize;
  }

  /**
   * @return mixed
   */
  public function getCarTireSize() {
    return $this->CarTireSize;
  }

  /**
   * @param mixed $CarTireSize
   */
  public function setCarTireSize($CarTireSize) {
    $this->CarTireSize = $CarTireSize;
  }

  /**
   * @return mixed
   */
  public function getCarFuelMileage() {
    return $this->CarFuelMileage;
  }

  /**
   * @param mixed $CarFuelMileage
   */
  public function setCarFuelMileage($CarFuelMileage) {
    $this->CarFuelMileage = $CarFuelMileage;
  }

  /**
   * @return mixed
   */
  public function getCarDriveTrain() {
    return $this->CarDriveTrain;
  }

  /**
   * @param mixed $CarDriveTrain
   */
  public function setCarDriveTrain($CarDriveTrain) {
    $this->CarDriveTrain = $CarDriveTrain;
  }


}
