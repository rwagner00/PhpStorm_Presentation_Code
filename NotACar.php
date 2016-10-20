<?php

/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 8/13/16
 * Time: 9:10 AM
 */
class NotACar {
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

  public function keyTest() {
    $array = array();
  }

  public function DrupalLovesNestedArrays() {
    $important_variable = "why_did_someone_hard_code_this";

    if (isset($nodes[0]['content']['field_deep_array']['#value']['und']['0'])) {
      $nodes[0]['content']['field_deep_array']['#value']['und']['0'] =
        $nodes[0]['content']['field_deep_array']['#value']['und']['0'] . 'extra text.';
    }
    else {
      return $nodes[0]['content']['field_deep_array']['#value']['und']['0'];
    }

    return $important_variable;
  }

  public function CodeDuplicationIsBad() {
    if (isset($nodes[0]['content']['field_deep_array']['#value']['und']['0'])) {
      $nodes[0]['content']['field_deep_array']['#value']['und']['0'] =
        $nodes[0]['content']['field_deep_array']['#value']['und']['0'] . 'extra text.';
    }
    else {
      return $nodes[0]['content']['field_deep_array']['#value']['und']['0'];
    }
  }

}
