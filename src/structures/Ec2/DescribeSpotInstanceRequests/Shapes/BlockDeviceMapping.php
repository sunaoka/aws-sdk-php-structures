<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsBlockDevice $Ebs
 * @property string $NoDevice
 * @property string $DeviceName
 * @property string $VirtualName
 */
class BlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     Ebs?: EbsBlockDevice,
     *     NoDevice?: string,
     *     DeviceName?: string,
     *     VirtualName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
