<?php

/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 8/7/16
 * Time: 3:56 PM
 */
class GoCart extends Vehicle {
  private $GoCartEngine;


  /**
   * @return mixed
   */
  public function getGoCartEngine() {
    return $this->GoCartEngine;
  }

  /**
   * @param mixed $GoCartEngine
   */
  public function setGoCartEngine($GoCartEngine) {
    $this->GoCartEngine = $GoCartEngine;
  }

  /**
   * @return mixed
   */
  public function getGoCartSeats() {
    return $this->GoCartSeats;
  }

  /**
   * @param mixed $GoCartSeats
   */
  public function setGoCartSeats($GoCartSeats) {
    $this->GoCartSeats = $GoCartSeats;
  }

  /**
   * @return mixed
   */
  public function getGoCartEngineSize() {
    return $this->GoCartEngineSize;
  }

  /**
   * @param mixed $GoCartEngineSize
   */
  public function setGoCartEngineSize($GoCartEngineSize) {
    $this->GoCartEngineSize = $GoCartEngineSize;
  }

  /**
   * @return mixed
   */
  public function getGoCartTopSpeed() {
    return $this->GoCartTopSpeed;
  }

  /**
   * @param mixed $GoCartTopSpeed
   */
  public function setGoCartTopSpeed($GoCartTopSpeed) {
    $this->GoCartTopSpeed = $GoCartTopSpeed;
  }

  /**
   * @return mixed
   */
  public function getGoCartDoors() {
    return $this->GoCartDoors;
  }

  /**
   * @param mixed $GoCartDoors
   */
  public function setGoCartDoors($GoCartDoors) {
    $this->GoCartDoors = $GoCartDoors;
  }

  /**
   * @return mixed
   */
  public function getGoCartWheelSize() {
    return $this->GoCartWheelSize;
  }

  /**
   * @param mixed $GoCartWheelSize
   */
  public function setGoCartWheelSize($GoCartWheelSize) {
    $this->GoCartWheelSize = $GoCartWheelSize;
  }

  /**
   * @return mixed
   */
  public function getGoCartTireSize() {
    return $this->GoCartTireSize;
  }

  /**
   * @param mixed $GoCartTireSize
   */
  public function setGoCartTireSize($GoCartTireSize) {
    $this->GoCartTireSize = $GoCartTireSize;
  }

  /**
   * @return mixed
   */
  public function getGoCartFuelMileage() {
    return $this->GoCartFuelMileage;
  }

  /**
   * @param mixed $GoCartFuelMileage
   */
  public function setGoCartFuelMileage($GoCartFuelMileage) {
    $this->GoCartFuelMileage = $GoCartFuelMileage;
  }

  /**
   * @return mixed
   */
  public function getGoCartDriveTrain() {
    return $this->GoCartDriveTrain;
  }

  /**
   * @param mixed $GoCartDriveTrain
   */
  public function setGoCartDriveTrain($GoCartDriveTrain) {
    $this->GoCartDriveTrain = $GoCartDriveTrain;
  }
  private $GoCartSeats;
  private $GoCartEngineSize;
  private $GoCartTopSpeed;
  private $GoCartDoors;
  private $GoCartWheelSize;
  private $GoCartTireSize;
  private $GoCartFuelMileage;
  private $GoCartDriveTrain;
}
