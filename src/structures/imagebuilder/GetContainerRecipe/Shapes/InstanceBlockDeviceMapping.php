<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetContainerRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property EbsInstanceBlockDeviceSpecification|null $ebs
 * @property string|null $virtualName
 * @property string|null $noDevice
 */
class InstanceBlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     deviceName?: string|null,
     *     ebs?: EbsInstanceBlockDeviceSpecification|null,
     *     virtualName?: string|null,
     *     noDevice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
