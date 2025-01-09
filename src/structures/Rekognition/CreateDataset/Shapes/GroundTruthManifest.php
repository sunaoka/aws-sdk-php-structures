<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $S3Object
 */
class GroundTruthManifest extends Shape
{
    /**
     * @param array{S3Object?: S3Object} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
