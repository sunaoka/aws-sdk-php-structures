<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Timestamp
 * @property PersonDetail|null $Person
 */
class PersonDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int|null,
     *     Person?: PersonDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
