<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Timestamp
 * @property PersonDetail $Person
 */
class PersonDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int,
     *     Person?: PersonDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
