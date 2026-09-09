<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmbeddedCaptionPositionSettings|null $Position
 * @property 'MANUAL'|'PASSTHROUGH'|null $StyleControl
 */
class EmbeddedDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Position?: EmbeddedCaptionPositionSettings|null,
     *     StyleControl?: 'MANUAL'|'PASSTHROUGH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
