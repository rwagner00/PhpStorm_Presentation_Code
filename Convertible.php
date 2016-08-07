<?php

/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 8/7/16
 * Time: 3:56 PM
 */
class Convertible extends Vehicle{
  private $ConvertibleEngine;
  private $ConvertibleSeats;
  private $ConvertibleEngineSize;
  private $ConvertibleTopSpeed;
  private $ConvertibleDoors;
  private $ConvertibleWheelSize;
  private $ConvertibleTireSize;
  private $ConvertibleFuelMileage;
  private $ConvertibleDriveTrain;

  /**
   * @return mixed
   */
  public function getConvertibleEngine() {
    return $this->ConvertibleEngine;
  }

  /**
   * @param mixed $ConvertibleEngine
   */
  public function setConvertibleEngine($ConvertibleEngine) {
    $this->ConvertibleEngine = $ConvertibleEngine;
  }

  /**
   * @return mixed
   */
  public function getConvertibleSeats() {
    return $this->ConvertibleSeats;
  }

  /**
   * @param mixed $ConvertibleSeats
   */
  public function setConvertibleSeats($ConvertibleSeats) {
    $this->ConvertibleSeats = $ConvertibleSeats;
  }

  /**
   * @return mixed
   */
  public function getConvertibleEngineSize() {
    return $this->ConvertibleEngineSize;
  }

  /**
   * @param mixed $ConvertibleEngineSize
   */
  public function setConvertibleEngineSize($ConvertibleEngineSize) {
    $this->ConvertibleEngineSize = $ConvertibleEngineSize;
  }

  /**
   * @return mixed
   */
  public function getConvertibleTopSpeed() {
    return $this->ConvertibleTopSpeed;
  }

  /**
   * @param mixed $ConvertibleTopSpeed
   */
  public function setConvertibleTopSpeed($ConvertibleTopSpeed) {
    $this->ConvertibleTopSpeed = $ConvertibleTopSpeed;
  }

  /**
   * @return mixed
   */
  public function getConvertibleDoors() {
    return $this->ConvertibleDoors;
  }

  /**
   * @param mixed $ConvertibleDoors
   */
  public function setConvertibleDoors($ConvertibleDoors) {
    $this->ConvertibleDoors = $ConvertibleDoors;
  }

  /**
   * @return mixed
   */
  public function getConvertibleWheelSize() {
    return $this->ConvertibleWheelSize;
  }

  /**
   * @param mixed $ConvertibleWheelSize
   */
  public function setConvertibleWheelSize($ConvertibleWheelSize) {
    $this->ConvertibleWheelSize = $ConvertibleWheelSize;
  }

  /**
   * @return mixed
   */
  public function getConvertibleTireSize() {
    return $this->ConvertibleTireSize;
  }

  /**
   * @param mixed $ConvertibleTireSize
   */
  public function setConvertibleTireSize($ConvertibleTireSize) {
    $this->ConvertibleTireSize = $ConvertibleTireSize;
  }

  /**
   * @return mixed
   */
  public function getConvertibleFuelMileage() {
    return $this->ConvertibleFuelMileage;
  }

  /**
   * @param mixed $ConvertibleFuelMileage
   */
  public function setConvertibleFuelMileage($ConvertibleFuelMileage) {
    $this->ConvertibleFuelMileage = $ConvertibleFuelMileage;
  }

  /**
   * @return mixed
   */
  public function getConvertibleDriveTrain() {
    return $this->ConvertibleDriveTrain;
  }

  /**
   * @param mixed $ConvertibleDriveTrain
   */
  public function setConvertibleDriveTrain($ConvertibleDriveTrain) {
    $this->ConvertibleDriveTrain = $ConvertibleDriveTrain;
  }
}
