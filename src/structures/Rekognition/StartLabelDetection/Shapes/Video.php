<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $S3Object
 */
class Video extends Shape
{
    /**
     * @param array{S3Object?: S3Object} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
