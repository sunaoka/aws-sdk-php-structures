<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventInformation $EventInformation
 * @property 'instance-change'|'fleet-change'|'service-error' $EventType
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class HistoryRecordEntry extends Shape
{
    /**
     * @param array{
     *     EventInformation?: EventInformation,
     *     EventType?: 'instance-change'|'fleet-change'|'service-error',
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
