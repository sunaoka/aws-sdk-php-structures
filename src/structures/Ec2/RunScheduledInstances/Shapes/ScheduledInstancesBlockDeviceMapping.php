<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property ScheduledInstancesEbs|null $Ebs
 * @property string|null $NoDevice
 * @property string|null $VirtualName
 */
class ScheduledInstancesBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     Ebs?: ScheduledInstancesEbs|null,
     *     NoDevice?: string|null,
     *     VirtualName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
