<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Index
 * @property BoundingBox|null $BoundingBox
 * @property FaceDetail|null $Face
 */
class PersonDetail extends Shape
{
    /**
     * @param array{
     *     Index?: int|null,
     *     BoundingBox?: BoundingBox|null,
     *     Face?: FaceDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
