<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BeginMarker
 * @property string $EndMarker
 */
class KeyRange extends Shape
{
    /**
     * @param array{
     *     BeginMarker?: string,
     *     EndMarker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
