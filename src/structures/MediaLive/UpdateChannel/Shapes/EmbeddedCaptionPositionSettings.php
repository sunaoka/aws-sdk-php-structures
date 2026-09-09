<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $YPositionLine
 */
class EmbeddedCaptionPositionSettings extends Shape
{
    /**
     * @param array{YPositionLine?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
