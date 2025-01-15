<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventDescription
 * @property string|null $EventSubType
 * @property string|null $InstanceId
 */
class EventInformation extends Shape
{
    /**
     * @param array{
     *     EventDescription?: string|null,
     *     EventSubType?: string|null,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
