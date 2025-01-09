<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2tsSettings $M2tsSettings
 * @property RawSettings $RawSettings
 */
class ArchiveContainerSettings extends Shape
{
    /**
     * @param array{
     *     M2tsSettings?: M2tsSettings,
     *     RawSettings?: RawSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
