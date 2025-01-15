<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsBlockDevice|null $Ebs
 * @property string|null $NoDevice
 * @property string|null $DeviceName
 * @property string|null $VirtualName
 */
class BlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     Ebs?: EbsBlockDevice|null,
     *     NoDevice?: string|null,
     *     DeviceName?: string|null,
     *     VirtualName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
