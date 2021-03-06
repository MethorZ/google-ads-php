<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/customer_extension_setting_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CustomerExtensionSettingService.GetCustomerExtensionSetting][google.ads.googleads.v1.services.CustomerExtensionSettingService.GetCustomerExtensionSetting].
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.GetCustomerExtensionSettingRequest</code>
 */
class GetCustomerExtensionSettingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the customer extension setting to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the customer extension setting to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\CustomerExtensionSettingService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the customer extension setting to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the customer extension setting to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}

