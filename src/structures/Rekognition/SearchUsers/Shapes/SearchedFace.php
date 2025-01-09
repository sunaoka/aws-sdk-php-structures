<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FaceId
 */
class SearchedFace extends Shape
{
    /**
     * @param array{FaceId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
