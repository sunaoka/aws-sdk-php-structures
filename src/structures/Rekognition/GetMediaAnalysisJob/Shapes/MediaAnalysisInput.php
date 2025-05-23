<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetMediaAnalysisJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $S3Object
 */
class MediaAnalysisInput extends Shape
{
    /**
     * @param array{S3Object: S3Object} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
