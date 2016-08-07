<?php

/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 8/7/16
 * Time: 3:55 PM
 */
class Vehicle {
  private $CarEngine;
  private $CarSeats;
  private $CarEngineSize;
  private $CarTopSpeed;
  private $CarDoors;
  private $CarWheelSize;
  private $CarTireSize;
  private $CarFuelMileage;
  private $CarDriveTrain;
  private $CarSeatSize;

  /**
   * Vehicle constructor.
   * @param $CarEngine
   * @param $CarSeats
   * @param $CarEngineSize
   * @param $CarTopSpeed
   * @param $CarDoors
   * @param $CarWheelSize
   * @param $CarTireSize
   * @param $CarFuelMileage
   * @param $CarDriveTrain
   * @param $carSeatSize
   */
  public function __construct($CarEngine, $CarSeats, $CarEngineSize, $CarTopSpeed, $CarDoors, $CarWheelSize, $CarTireSize, $CarFuelMileage, $CarDriveTrain, $carSeatSize) {
    $this->CarEngine = $CarEngine;
    $this->CarSeats = $CarSeats;
    $this->CarEngineSize = $CarEngineSize;
    $this->CarTopSpeed = $CarTopSpeed;
    $this->CarDoors = $CarDoors;
    $this->CarWheelSize = $CarWheelSize;
    $this->CarTireSize = $CarTireSize;
    $this->CarFuelMileage = $CarFuelMileage;
    $this->CarDriveTrain = $CarDriveTrain;
    $this->CarSeatSize = $carSeatSize;

    $this->CarSeats = $this->getCarSeats();
  }


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
    // Because at some point someone decided we really should store car seats
    // in terms of car seat size. But the client wants to return number of car
    // seats in terms of cubic centimeters.

    $size_in_inches = pow($this->CarSeatSize, 1/3);

    $size_in_cm = $size_in_inches * 2.54;

    $size_in_cubic_cm = pow($size_in_cm, 3);

    $carseats = $this->CarSeats;

    return $carseats;
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
