<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for UpdateEnhancedMeasurementSettings RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateEnhancedMeasurementSettingsRequest</code>
 */
class UpdateEnhancedMeasurementSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The settings to update.
     * The `name` field is used to identify the settings to be updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EnhancedMeasurementSettings enhanced_measurement_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $enhanced_measurement_settings = null;
    /**
     * Required. The list of fields to be updated. Field names must be in snake case
     * (e.g., "field_to_update"). Omitted fields will not be updated. To replace
     * the entire entity, use one path with the string "*" to match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\EnhancedMeasurementSettings $enhanced_measurement_settings
     *           Required. The settings to update.
     *           The `name` field is used to identify the settings to be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated. Field names must be in snake case
     *           (e.g., "field_to_update"). Omitted fields will not be updated. To replace
     *           the entire entity, use one path with the string "*" to match all fields.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. The settings to update.
     * The `name` field is used to identify the settings to be updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EnhancedMeasurementSettings enhanced_measurement_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\EnhancedMeasurementSettings|null
     */
    public function getEnhancedMeasurementSettings()
    {
        return isset($this->enhanced_measurement_settings) ? $this->enhanced_measurement_settings : null;
    }
    public function hasEnhancedMeasurementSettings()
    {
        return isset($this->enhanced_measurement_settings);
    }
    public function clearEnhancedMeasurementSettings()
    {
        unset($this->enhanced_measurement_settings);
    }
    /**
     * Required. The settings to update.
     * The `name` field is used to identify the settings to be updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EnhancedMeasurementSettings enhanced_measurement_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\EnhancedMeasurementSettings $var
     * @return $this
     */
    public function setEnhancedMeasurementSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\EnhancedMeasurementSettings::class);
        $this->enhanced_measurement_settings = $var;
        return $this;
    }
    /**
     * Required. The list of fields to be updated. Field names must be in snake case
     * (e.g., "field_to_update"). Omitted fields will not be updated. To replace
     * the entire entity, use one path with the string "*" to match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }
    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }
    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }
    /**
     * Required. The list of fields to be updated. Field names must be in snake case
     * (e.g., "field_to_update"). Omitted fields will not be updated. To replace
     * the entire entity, use one path with the string "*" to match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;
        return $this;
    }
}
