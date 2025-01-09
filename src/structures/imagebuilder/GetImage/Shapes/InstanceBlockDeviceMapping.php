<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceName
 * @property EbsInstanceBlockDeviceSpecification $ebs
 * @property string $virtualName
 * @property string $noDevice
 */
class InstanceBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     deviceName?: string,
     *     ebs?: EbsInstanceBlockDeviceSpecification,
     *     virtualName?: string,
     *     noDevice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
