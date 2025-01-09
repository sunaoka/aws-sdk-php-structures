<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Timestamp
 * @property CelebrityDetail $Celebrity
 */
class CelebrityRecognition extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int,
     *     Celebrity?: CelebrityDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
