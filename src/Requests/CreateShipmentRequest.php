<?php

namespace Kmuharam\SMSAExpress\Requests;

class CreateShipmentRequest
{
    /**
     * Unique Code for each Customer provided by SMSA.
     *
     * @var string
     */
    public string $passkey = '';

    /**
     * Unique Number for each day.
     *
     * @var string
     */
    public string $refno = '';

    /**
     * @var string
     */
    public string $sentDate = '';

    /**
     * Consignee ID.
     *
     * @var string
     */
    public string $idNo = '';

    /**
     * Consignee Name.
     *
     * @var string
     */
    public string $cName = '';

    /**
     * Consignee Country.
     *
     * @var string
     */
    public string $cntry = '';

    /**
     * Consignee City.
     *
     * @var string
     */
    public string $cCity = '';

    /**
     * Consignee Zip code.
     *
     * @var string
     */
    public string $cZip = '';

    /**
     * Consignee PO Box.
     *
     * @var string
     */
    public string $cPOBox = '';

    /**
     * @var string
     */
    public string $cMobile = '';

    /**
     * @var string
     */
    public string $cTel1 = '';

    /**
     * @var string
     */
    public string $cTel2 = '';

    /**
     * Either of Address fields to be filled duly.
     *
     * @var string
     */
    public string $cAddr1 = '';

    /**
     * Either of Address fields to be filled duly.
     *
     * @var string
     */
    public string $cAddr2 = '';

    /**
     * DLV for normal Shipments, for other special cases we will provide.
     *
     * @var string
     */
    public string $shipType = '';

    /**
     * No. of Pieces.
     *
     * @var string
     */
    public string $pcs = '';

    /**
     * @var string
     */
    public string $cEmail = '';

    /**
     * Carriage Value.
     *
     * @var string
     */
    public string $carrValue = '';

    /**
     * Carriage Currency.
     *
     * @var string
     */
    public string $carrCurr = '';

    /**
     * Value Either 0 or greater than 0 in case of COD.
     *
     * @var string
     */
    public string $codAmt = '';

    /**
     * Weight of the Shipment.
     *
     * @var string
     */
    public string $weight = '';

    /**
     * Description of the items present in shipment.
     *
     * @var string
     */
    public string $itemDesc = '';

    /**
     * Customs Value.
     *
     * @var string
     */
    public string $custVal = '';

    /**
     * Customs Currency.
     *
     * @var string
     */
    public string $custCurr = '';

    /**
     * Insurance Value.
     *
     * @var string
     */
    public string $insrAmt = '';

    /**
     * Insurance Currency.
     *
     * @var string
     */
    public string $insrCurr = '';

    /**
     * Shipper Name.
     *
     * @var string
     */
    public string $sName = '';

    /**
     * Shipper Contact name.
     *
     * @var string
     */
    public string $sContact = '';

    /**
     * Shipper Address.
     *
     * @var string
     */
    public string $sAddr1 = '';

    /**
     * Shipper Address.
     *
     * @var string
     */
    public string $sAddr2 = '';

    /**
     * Shipper City.
     *
     * @var string
     */
    public string $sCity = '';

    /**
     * Shipper Phone number.
     *
     * @var string
     */
    public string $sPhone = '';

    /**
     * Shipper country.
     *
     * @var string
     */
    public string $sCntry = '';

    /**
     * Preferred Delivery date in case of future or delayed delivery.
     *
     * @var string
     */
    public string $prefDelvDate = '';

    /**
     * Google GPS points separated by comma for delivery to customer by Google maps.
     *
     * @var string
     */
    public string $gpsPoints = '';

    /**
     * Returns an array representation of the model body parameters.
     *
     * @return array
     */
    public function buildBodyPayload(): array
    {
        return [
            'passKey' => $this->passkey,
            'refNo' => $this->refno,
            'sentDate' => $this->sentDate,
            'idNo' => $this->idNo,
            'cName' => $this->cName,
            'cntry' => $this->cntry,
            'cCity' => $this->cCity,
            'cZip' => $this->cZip,
            'cPOBox' => $this->cPOBox,
            'cMobile' => $this->cMobile,
            'cTel1' => $this->cTel1,
            'cTel2' => $this->cTel2,
            'cAddr1' => $this->cAddr1,
            'cAddr2' => $this->cAddr2,
            'shipType' => $this->shipType,
            'PCs' => $this->pcs,
            'cEmail' => $this->cEmail,
            'carrValue' => $this->carrValue,
            'carrCurr' => $this->carrCurr,
            'codAmt' => $this->codAmt,
            'weight' => $this->weight,
            'itemDesc' => $this->itemDesc,
            'custVal' => $this->custVal,
            'custCurr' => $this->custCurr,
            'insrAmt' => $this->insrAmt,
            'insrCurr' => $this->insrCurr,
            'sName' => $this->sName,
            'sContact' => $this->sContact,
            'sAddr1' => $this->sAddr1,
            'sAddr2' => $this->sAddr2,
            'sCity' => $this->sCity,
            'sPhone' => $this->sPhone,
            'sCntry' => $this->sCntry,
            'prefDelvDate' => $this->prefDelvDate,
            'gpsPoints' => $this->gpsPoints,
        ];
    }
}
