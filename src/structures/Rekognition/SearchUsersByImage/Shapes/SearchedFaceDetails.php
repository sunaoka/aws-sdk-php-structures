<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FaceDetail $FaceDetail
 */
class SearchedFaceDetails extends Shape
{
    /**
     * @param array{FaceDetail?: FaceDetail} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
