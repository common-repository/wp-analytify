<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for BatchCreateAccessBindings RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.BatchCreateAccessBindingsRequest</code>
 */
class BatchCreateAccessBindingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The account or property that owns the access bindings. The parent
     * field in the CreateAccessBindingRequest messages must either be empty or
     * match this field. Formats:
     * - accounts/{account}
     * - properties/{property}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The requests specifying the access bindings to create.
     * A maximum of 1000 access bindings can be created in a batch.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CreateAccessBindingRequest requests = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $requests;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The account or property that owns the access bindings. The parent
     *           field in the CreateAccessBindingRequest messages must either be empty or
     *           match this field. Formats:
     *           - accounts/{account}
     *           - properties/{property}
     *     @type array<\Google\Analytics\Admin\V1alpha\CreateAccessBindingRequest>|\Google\Protobuf\Internal\RepeatedField $requests
     *           Required. The requests specifying the access bindings to create.
     *           A maximum of 1000 access bindings can be created in a batch.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. The account or property that owns the access bindings. The parent
     * field in the CreateAccessBindingRequest messages must either be empty or
     * match this field. Formats:
     * - accounts/{account}
     * - properties/{property}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Required. The account or property that owns the access bindings. The parent
     * field in the CreateAccessBindingRequest messages must either be empty or
     * match this field. Formats:
     * - accounts/{account}
     * - properties/{property}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
        return $this;
    }
    /**
     * Required. The requests specifying the access bindings to create.
     * A maximum of 1000 access bindings can be created in a batch.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CreateAccessBindingRequest requests = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }
    /**
     * Required. The requests specifying the access bindings to create.
     * A maximum of 1000 access bindings can be created in a batch.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CreateAccessBindingRequest requests = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Analytics\Admin\V1alpha\CreateAccessBindingRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\CreateAccessBindingRequest::class);
        $this->requests = $arr;
        return $this;
    }
}
