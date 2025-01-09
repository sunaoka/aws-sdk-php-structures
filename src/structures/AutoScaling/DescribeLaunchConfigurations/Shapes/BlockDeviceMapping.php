<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VirtualName
 * @property string $DeviceName
 * @property Ebs $Ebs
 * @property bool $NoDevice
 */
class BlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     VirtualName?: string,
     *     DeviceName: string,
     *     Ebs?: Ebs,
     *     NoDevice?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
