<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Low
 * @property int<0, max> $High
 */
class AgeRange extends Shape
{
    /**
     * @param array{
     *     Low?: int<0, max>,
     *     High?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
