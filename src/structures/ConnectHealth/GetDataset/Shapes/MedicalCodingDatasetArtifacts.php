<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $evaluationS3Uri
 */
class MedicalCodingDatasetArtifacts extends Shape
{
    /**
     * @param array{evaluationS3Uri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
