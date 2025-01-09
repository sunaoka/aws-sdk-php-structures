<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationPath
 * @property GroupOwnerSetting $GroupOwnerSetting
 * @property string $SourcePath
 */
class LocalVolumeResourceData extends Shape
{
    /**
     * @param array{
     *     DestinationPath?: string,
     *     GroupOwnerSetting?: GroupOwnerSetting,
     *     SourcePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
