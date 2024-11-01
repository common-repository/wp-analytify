<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/interval.proto
namespace Google\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
/**
 * Represents a time interval, encoded as a Timestamp start (inclusive) and a
 * Timestamp end (exclusive).
 * The start must be less than or equal to the end.
 * When the start equals the end, the interval is empty (matches no time).
 * When both start and end are unspecified, the interval matches any time.
 *
 * Generated from protobuf message <code>google.type.Interval</code>
 */
class Interval extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Inclusive start of the interval.
     * If specified, a Timestamp matching this interval will have to be the same
     * or after the start.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * Optional. Exclusive end of the interval.
     * If specified, a Timestamp matching this interval will have to be before the
     * end.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Optional. Inclusive start of the interval.
     *           If specified, a Timestamp matching this interval will have to be the same
     *           or after the start.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Optional. Exclusive end of the interval.
     *           If specified, a Timestamp matching this interval will have to be before the
     *           end.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Type\Interval::initOnce();
        parent::__construct($data);
    }
    /**
     * Optional. Inclusive start of the interval.
     * If specified, a Timestamp matching this interval will have to be the same
     * or after the start.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : null;
    }
    public function hasStartTime()
    {
        return isset($this->start_time);
    }
    public function clearStartTime()
    {
        unset($this->start_time);
    }
    /**
     * Optional. Inclusive start of the interval.
     * If specified, a Timestamp matching this interval will have to be the same
     * or after the start.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;
        return $this;
    }
    /**
     * Optional. Exclusive end of the interval.
     * If specified, a Timestamp matching this interval will have to be before the
     * end.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
    }
    public function hasEndTime()
    {
        return isset($this->end_time);
    }
    public function clearEndTime()
    {
        unset($this->end_time);
    }
    /**
     * Optional. Exclusive end of the interval.
     * If specified, a Timestamp matching this interval will have to be before the
     * end.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;
        return $this;
    }
}
