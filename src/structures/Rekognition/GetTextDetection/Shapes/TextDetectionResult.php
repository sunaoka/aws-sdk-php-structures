<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetTextDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Timestamp
 * @property TextDetection $TextDetection
 */
class TextDetectionResult extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int,
     *     TextDetection?: TextDetection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
