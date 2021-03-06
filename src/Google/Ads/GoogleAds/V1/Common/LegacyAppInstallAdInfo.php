<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A legacy app install ad that only can be used by a few select customers.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.LegacyAppInstallAdInfo</code>
 */
class LegacyAppInstallAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The id of the mobile app.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 1;</code>
     */
    private $app_id = null;
    /**
     * The app store the mobile app is available in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore app_store = 2;</code>
     */
    private $app_store = 0;
    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 3;</code>
     */
    private $headline = null;
    /**
     * The first description line of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description1 = 4;</code>
     */
    private $description1 = null;
    /**
     * The second description line of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 5;</code>
     */
    private $description2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $app_id
     *           The id of the mobile app.
     *     @type int $app_store
     *           The app store the mobile app is available in.
     *     @type \Google\Protobuf\StringValue $headline
     *           The headline of the ad.
     *     @type \Google\Protobuf\StringValue $description1
     *           The first description line of the ad.
     *     @type \Google\Protobuf\StringValue $description2
     *           The second description line of the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The id of the mobile app.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The id of the mobile app.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->app_id = $var;

        return $this;
    }

    /**
     * The app store the mobile app is available in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore app_store = 2;</code>
     * @return int
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * The app store the mobile app is available in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore app_store = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAppStore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\LegacyAppInstallAdAppStoreEnum_LegacyAppInstallAdAppStore::class);
        $this->app_store = $var;

        return $this;
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->headline = $var;

        return $this;
    }

    /**
     * The first description line of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description1 = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * The first description line of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description1 = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription1($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description1 = $var;

        return $this;
    }

    /**
     * The second description line of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * The second description line of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description2 = $var;

        return $this;
    }

}

