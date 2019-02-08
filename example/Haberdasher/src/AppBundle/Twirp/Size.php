<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: haberdasher.proto

namespace AppBundle\Twirp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Size of a Hat, in inches.
 *
 * Generated from protobuf message <code>twirp.example.haberdasher.Size</code>
 */
class Size extends \Google\Protobuf\Internal\Message
{
    /**
     * must be > 0
     *
     * Generated from protobuf field <code>int32 inches = 1;</code>
     */
    private $inches = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $inches
     *           must be > 0
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Haberdasher::initOnce();
        parent::__construct($data);
    }

    /**
     * must be > 0
     *
     * Generated from protobuf field <code>int32 inches = 1;</code>
     * @return int
     */
    public function getInches()
    {
        return $this->inches;
    }

    /**
     * must be > 0
     *
     * Generated from protobuf field <code>int32 inches = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInches($var)
    {
        GPBUtil::checkInt32($var);
        $this->inches = $var;

        return $this;
    }

}
