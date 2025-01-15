<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VirtualName
 * @property string $DeviceName
 * @property Ebs|null $Ebs
 * @property bool|null $NoDevice
 */
class BlockDeviceMapping extends Shape
{
    /**
     * @param array{
     *     VirtualName?: string|null,
     *     DeviceName: string,
     *     Ebs?: Ebs|null,
     *     NoDevice?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
