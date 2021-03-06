<?php
/**
 * TOP API: alibaba.aliqin.fc.iot.cardStatus request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaAliqinFcIotCardStatusRequest
{
	/** 
	 * SIM卡号
	 **/
	private $iccid;
	
	private $apiParas = array();
	
	public function setIccid($iccid)
	{
		$this->iccid = $iccid;
		$this->apiParas["iccid"] = $iccid;
	}

	public function getIccid()
	{
		return $this->iccid;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.fc.iot.cardStatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->iccid,"iccid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
