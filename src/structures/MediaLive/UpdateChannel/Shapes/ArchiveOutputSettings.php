<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveContainerSettings $ContainerSettings
 * @property string|null $Extension
 * @property string|null $NameModifier
 */
class ArchiveOutputSettings extends Shape
{
    /**
     * @param array{
     *     ContainerSettings: ArchiveContainerSettings,
     *     Extension?: string|null,
     *     NameModifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
