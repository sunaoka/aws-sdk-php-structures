<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequestHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventInformation $EventInformation
 * @property 'instanceChange'|'fleetRequestChange'|'error'|'information' $EventType
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class HistoryRecord extends Shape
{
    /**
     * @param array{
     *     EventInformation?: EventInformation,
     *     EventType?: 'instanceChange'|'fleetRequestChange'|'error'|'information',
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
