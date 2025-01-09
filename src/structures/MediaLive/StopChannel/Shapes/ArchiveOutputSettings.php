<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveContainerSettings $ContainerSettings
 * @property string $Extension
 * @property string $NameModifier
 */
class ArchiveOutputSettings extends Shape
{
    /**
     * @param array{
     *     ContainerSettings: ArchiveContainerSettings,
     *     Extension?: string,
     *     NameModifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
