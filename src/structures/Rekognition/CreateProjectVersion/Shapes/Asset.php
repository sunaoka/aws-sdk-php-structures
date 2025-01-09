<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProjectVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GroundTruthManifest $GroundTruthManifest
 */
class Asset extends Shape
{
    /**
     * @param array{GroundTruthManifest?: GroundTruthManifest} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
