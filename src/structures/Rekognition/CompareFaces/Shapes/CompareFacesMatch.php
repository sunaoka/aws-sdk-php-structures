<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Similarity
 * @property ComparedFace|null $Face
 */
class CompareFacesMatch extends Shape
{
    /**
     * @param array{
     *     Similarity?: float|null,
     *     Face?: ComparedFace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
