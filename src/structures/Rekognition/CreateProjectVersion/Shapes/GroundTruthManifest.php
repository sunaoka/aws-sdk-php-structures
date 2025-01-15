<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProjectVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object|null $S3Object
 */
class GroundTruthManifest extends Shape
{
    /**
     * @param array{S3Object?: S3Object|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
