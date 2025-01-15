<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequestHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventInformation|null $EventInformation
 * @property 'instanceChange'|'fleetRequestChange'|'error'|'information'|null $EventType
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class HistoryRecord extends Shape
{
    /**
     * @param array{
     *     EventInformation?: EventInformation|null,
     *     EventType?: 'instanceChange'|'fleetRequestChange'|'error'|'information'|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
