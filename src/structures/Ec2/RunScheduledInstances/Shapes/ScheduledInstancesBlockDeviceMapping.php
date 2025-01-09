<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property ScheduledInstancesEbs $Ebs
 * @property string $NoDevice
 * @property string $VirtualName
 */
class ScheduledInstancesBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     Ebs?: ScheduledInstancesEbs,
     *     NoDevice?: string,
     *     VirtualName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
