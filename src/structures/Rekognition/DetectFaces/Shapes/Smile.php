<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Value
 * @property float|null $Confidence
 */
class Smile extends Shape
{
    /**
     * @param array{
     *     Value?: bool|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
