<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property BoundingBox $BoundingBox
 * @property FaceDetail $Face
 */
class PersonDetail extends Shape
{
    /**
     * @param array{
     *     Index?: int,
     *     BoundingBox?: BoundingBox,
     *     Face?: FaceDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
