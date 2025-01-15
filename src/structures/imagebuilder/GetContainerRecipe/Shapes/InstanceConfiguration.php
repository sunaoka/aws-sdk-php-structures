<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetContainerRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $image
 * @property list<InstanceBlockDeviceMapping>|null $blockDeviceMappings
 */
class InstanceConfiguration extends Shape
{
    /**
     * @param array{
     *     image?: string|null,
     *     blockDeviceMappings?: list<InstanceBlockDeviceMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
