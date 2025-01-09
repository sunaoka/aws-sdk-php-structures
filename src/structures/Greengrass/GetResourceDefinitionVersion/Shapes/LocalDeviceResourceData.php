<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GroupOwnerSetting $GroupOwnerSetting
 * @property string $SourcePath
 */
class LocalDeviceResourceData extends Shape
{
    /**
     * @param array{
     *     GroupOwnerSetting?: GroupOwnerSetting,
     *     SourcePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
