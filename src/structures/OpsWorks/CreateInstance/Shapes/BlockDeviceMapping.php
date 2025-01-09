<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property string $NoDevice
 * @property string $VirtualName
 * @property EbsBlockDevice $Ebs
 */
class BlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     NoDevice?: string,
     *     VirtualName?: string,
     *     Ebs?: EbsBlockDevice
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
