<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Similarity
 * @property Face|null $Face
 */
class FaceMatch extends Shape
{
    /**
     * @param array{
     *     Similarity?: float|null,
     *     Face?: Face|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
