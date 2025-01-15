<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventInformation|null $EventInformation
 * @property 'instance-change'|'fleet-change'|'service-error'|null $EventType
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class HistoryRecordEntry extends Shape
{
    /**
     * @param array{
     *     EventInformation?: EventInformation|null,
     *     EventType?: 'instance-change'|'fleet-change'|'service-error'|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
