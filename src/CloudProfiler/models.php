<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudProfiler;

class CreateProfileRequest extends \Google\Collection
{
  /** @var Deployment */
  public $deployment;
  /** @var string[] */
  public $profileType;
  protected $collection_key = 'profileType';
  protected $deploymentType = Deployment::class;
  protected $deploymentDataType = '';
  /** @param Deployment */
  public function setDeployment(Deployment $deployment)
  {
    $this->deployment = $deployment;
  }
  /** @return Deployment */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /** @param string[] */
  public function setProfileType($profileType)
  {
    $this->profileType = $profileType;
  }
  /** @return string[] */
  public function getProfileType()
  {
    return $this->profileType;
  }
}

class Deployment extends \Google\Model
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $projectId;
  /** @var string */
  public $target;

  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
}

class Profile extends \Google\Model
{
  /** @var Deployment */
  public $deployment;
  /** @var string */
  public $duration;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $profileBytes;
  /** @var string */
  public $profileType;
  protected $deploymentType = Deployment::class;
  protected $deploymentDataType = '';
  /** @param Deployment */
  public function setDeployment(Deployment $deployment)
  {
    $this->deployment = $deployment;
  }
  /** @return Deployment */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setProfileBytes($profileBytes)
  {
    $this->profileBytes = $profileBytes;
  }
  /** @return string */
  public function getProfileBytes()
  {
    return $this->profileBytes;
  }
  /** @param string */
  public function setProfileType($profileType)
  {
    $this->profileType = $profileType;
  }
  /** @return string */
  public function getProfileType()
  {
    return $this->profileType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreateProfileRequest::class, 'Google_Service_CloudProfiler_CreateProfileRequest');
class_alias(Deployment::class, 'Google_Service_CloudProfiler_Deployment');
class_alias(Profile::class, 'Google_Service_CloudProfiler_Profile');
