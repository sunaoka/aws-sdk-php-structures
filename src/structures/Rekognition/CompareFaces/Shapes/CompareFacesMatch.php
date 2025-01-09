<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Similarity
 * @property ComparedFace $Face
 */
class CompareFacesMatch extends Shape
{
    /**
     * @param array{
     *     Similarity?: float,
     *     Face?: ComparedFace
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
