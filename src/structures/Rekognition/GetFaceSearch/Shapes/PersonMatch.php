<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Timestamp
 * @property PersonDetail $Person
 * @property list<FaceMatch> $FaceMatches
 */
class PersonMatch extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int,
     *     Person?: PersonDetail,
     *     FaceMatches?: list<FaceMatch>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
