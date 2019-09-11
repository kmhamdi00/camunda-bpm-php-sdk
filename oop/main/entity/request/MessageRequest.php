<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:38
 * To change this template use File | Settings | File Templates.
 */

namespace org\camunda\php\sdk\entity\request;

class MessageRequest extends Request {
  protected $messageName;
  protected $businessKey;
  protected $correlationKeys;
  protected $processVariables;
  protected $tenantId;
  protected $all = false;


  /**
   * @param mixed $all
   * @return $this
   */
  public function setAll($all) {
    $this->all = $all;
    return $this;
  }

  /**
 * @return mixed
 */
  public function getAll(){
    return $this->all;
  }

    /**
   * @param mixed $tenantId
   * @return $this
   */
  public function setTenantId($tenantId) {
    $this->tenantId = $tenantId;
    return $this;
  }

  /**
 * @return mixed
 */
  public function getTenantId(){
    return $this->tenantId;
  }

  /**
   * @param mixed $businessKey
   * @return $this
   */
  public function setBusinessKey($businessKey) {
    $this->businessKey = $businessKey;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getBusinessKey() {
    return $this->businessKey;
  }

  /**
   * @param mixed $correlationKeys
   * @return $this
   */
  public function setCorrelationKeys($correlationKeys) {
    $this->correlationKeys = $correlationKeys;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getCorrelationKeys() {
    return $this->correlationKeys;
  }

  /**
   * @param mixed $messageName
   * @return $this
   */
  public function setMessageName($messageName) {
    $this->messageName = $messageName;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getMessageName() {
    return $this->messageName;
  }

  /**
   * @param mixed $processVariables
   * @return $this
   */
  public function setProcessVariables($processVariables) {
    $this->processVariables = $processVariables;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getProcessVariables() {
    return $this->processVariables;
  }


}