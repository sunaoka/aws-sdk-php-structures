<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2tsSettings|null $M2tsSettings
 * @property RawSettings|null $RawSettings
 */
class ArchiveContainerSettings extends Shape
{
    /**
     * @param array{
     *     M2tsSettings?: M2tsSettings|null,
     *     RawSettings?: RawSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
