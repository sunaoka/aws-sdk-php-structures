<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequestHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventDescription
 * @property string $EventSubType
 * @property string $InstanceId
 */
class EventInformation extends Shape
{
    /**
     * @param array{
     *     EventDescription?: string,
     *     EventSubType?: string,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
