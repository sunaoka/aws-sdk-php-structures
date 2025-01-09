<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatasetGroundTruthManifest $GroundTruthManifest
 */
class DatasetSource extends Shape
{
    /**
     * @param array{GroundTruthManifest?: DatasetGroundTruthManifest} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
