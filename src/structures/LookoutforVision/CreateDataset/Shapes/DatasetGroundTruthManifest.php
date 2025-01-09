<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputS3Object $S3Object
 */
class DatasetGroundTruthManifest extends Shape
{
    /**
     * @param array{S3Object?: InputS3Object} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
