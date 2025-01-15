<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GroundTruthManifest|null $GroundTruthManifest
 * @property string|null $DatasetArn
 */
class DatasetSource extends Shape
{
    /**
     * @param array{
     *     GroundTruthManifest?: GroundTruthManifest|null,
     *     DatasetArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
