<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationPath
 * @property GroupOwnerSetting|null $GroupOwnerSetting
 * @property string|null $SourcePath
 */
class LocalVolumeResourceData extends Shape
{
    /**
     * @param array{
     *     DestinationPath?: string|null,
     *     GroupOwnerSetting?: GroupOwnerSetting|null,
     *     SourcePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
