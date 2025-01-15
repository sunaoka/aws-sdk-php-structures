<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Timestamp
 * @property CelebrityDetail|null $Celebrity
 */
class CelebrityRecognition extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int|null,
     *     Celebrity?: CelebrityDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
