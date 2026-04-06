<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property string|null $VirtualName
 * @property EbsBlockDeviceResponse|null $Ebs
 * @property string|null $NoDevice
 */
class BlockDeviceMappingResponse extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     VirtualName?: string|null,
     *     Ebs?: EbsBlockDeviceResponse|null,
     *     NoDevice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
