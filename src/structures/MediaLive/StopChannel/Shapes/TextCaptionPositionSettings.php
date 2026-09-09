<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $YPositionPercentage
 */
class TextCaptionPositionSettings extends Shape
{
    /**
     * @param array{YPositionPercentage?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
