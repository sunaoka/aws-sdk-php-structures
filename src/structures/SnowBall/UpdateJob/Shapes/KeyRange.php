<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BeginMarker
 * @property string|null $EndMarker
 */
class KeyRange extends Shape
{
    /**
     * @param array{
     *     BeginMarker?: string|null,
     *     EndMarker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
