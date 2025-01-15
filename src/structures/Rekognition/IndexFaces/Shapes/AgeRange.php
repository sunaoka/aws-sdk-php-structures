<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Low
 * @property int<0, max>|null $High
 */
class AgeRange extends Shape
{
    /**
     * @param array{
     *     Low?: int<0, max>|null,
     *     High?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
