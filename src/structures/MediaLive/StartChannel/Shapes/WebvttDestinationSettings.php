<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_STYLE_DATA'|'PASSTHROUGH'|null $StyleControl
 */
class WebvttDestinationSettings extends Shape
{
    /**
     * @param array{StyleControl?: 'NO_STYLE_DATA'|'PASSTHROUGH'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
