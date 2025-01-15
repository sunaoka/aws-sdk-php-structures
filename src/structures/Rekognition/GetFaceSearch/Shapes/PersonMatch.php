<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Timestamp
 * @property PersonDetail|null $Person
 * @property list<FaceMatch>|null $FaceMatches
 */
class PersonMatch extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int|null,
     *     Person?: PersonDetail|null,
     *     FaceMatches?: list<FaceMatch>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
