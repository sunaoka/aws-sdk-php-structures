<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $image
 * @property list<InstanceBlockDeviceMapping> $blockDeviceMappings
 */
class InstanceConfiguration extends Shape
{
    /**
     * @param array{
     *     image?: string,
     *     blockDeviceMappings?: list<InstanceBlockDeviceMapping>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
