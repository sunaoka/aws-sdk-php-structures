<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GroupOwnerSetting|null $GroupOwnerSetting
 * @property string|null $SourcePath
 */
class LocalDeviceResourceData extends Shape
{
    /**
     * @param array{
     *     GroupOwnerSetting?: GroupOwnerSetting|null,
     *     SourcePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
