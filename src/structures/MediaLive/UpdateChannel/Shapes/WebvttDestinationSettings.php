<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_STYLE_DATA'|'PASSTHROUGH'|'MANUAL'|null $StyleControl
 * @property TextCaptionPositionSettings|null $Position
 */
class WebvttDestinationSettings extends Shape
{
    /**
     * @param array{
     *     StyleControl?: 'NO_STYLE_DATA'|'PASSTHROUGH'|'MANUAL'|null,
     *     Position?: TextCaptionPositionSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
