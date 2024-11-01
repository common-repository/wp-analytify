<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto
namespace Google\Analytics\Data\V1beta\Filter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
/**
 * The result needs to be in a list of string values.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.Filter.InListFilter</code>
 */
class InListFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of string values.
     * Must be non-empty.
     *
     * Generated from protobuf field <code>repeated string values = 1;</code>
     */
    private $values;
    /**
     * If true, the string value is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 2;</code>
     */
    private $case_sensitive = \false;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $values
     *           The list of string values.
     *           Must be non-empty.
     *     @type bool $case_sensitive
     *           If true, the string value is case sensitive.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }
    /**
     * The list of string values.
     * Must be non-empty.
     *
     * Generated from protobuf field <code>repeated string values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }
    /**
     * The list of string values.
     * Must be non-empty.
     *
     * Generated from protobuf field <code>repeated string values = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;
        return $this;
    }
    /**
     * If true, the string value is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 2;</code>
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }
    /**
     * If true, the string value is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCaseSensitive($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive = $var;
        return $this;
    }
}
