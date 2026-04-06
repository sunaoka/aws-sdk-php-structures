<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property string|null $VirtualName
 * @property EbsBlockDevice|null $Ebs
 * @property string|null $NoDevice
 */
class BlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     VirtualName?: string|null,
     *     Ebs?: EbsBlockDevice|null,
     *     NoDevice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
