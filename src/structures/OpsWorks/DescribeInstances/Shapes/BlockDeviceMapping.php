<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property string|null $NoDevice
 * @property string|null $VirtualName
 * @property EbsBlockDevice|null $Ebs
 */
class BlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     NoDevice?: string|null,
     *     VirtualName?: string|null,
     *     Ebs?: EbsBlockDevice|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
