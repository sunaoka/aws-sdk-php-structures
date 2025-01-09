<?php

namespace Sunaoka\Aws\Structures\CloudTrail\LookupEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EventId'|'EventName'|'ReadOnly'|'Username'|'ResourceType'|'ResourceName'|'EventSource'|'AccessKeyId' $AttributeKey
 * @property string $AttributeValue
 */
class LookupAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeKey: 'EventId'|'EventName'|'ReadOnly'|'Username'|'ResourceType'|'ResourceName'|'EventSource'|'AccessKeyId',
     *     AttributeValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
