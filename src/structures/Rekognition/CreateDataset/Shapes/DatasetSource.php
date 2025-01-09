<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GroundTruthManifest $GroundTruthManifest
 * @property string $DatasetArn
 */
class DatasetSource extends Shape
{
    /**
     * @param array{
     *     GroundTruthManifest?: GroundTruthManifest,
     *     DatasetArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
