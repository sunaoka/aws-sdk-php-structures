<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactId
 * @property \Aws\Api\DateTimeResult|null $InitiationTimestamp
 * @property string|null $QuickConnectId
 * @property string|null $QuickConnectName
 * @property 'USER'|'QUEUE'|'PHONE_NUMBER'|'FLOW'|null $QuickConnectType
 */
class QuickConnectContactData extends Shape
{
    /**
     * @param array{
     *     ContactId?: string|null,
     *     InitiationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     QuickConnectId?: string|null,
     *     QuickConnectName?: string|null,
     *     QuickConnectType?: 'USER'|'QUEUE'|'PHONE_NUMBER'|'FLOW'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
