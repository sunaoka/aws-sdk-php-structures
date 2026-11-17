<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MedicalCodingDatasetArtifacts|null $medicalCoding
 */
class DatasetArtifacts extends Shape
{
    /**
     * @param array{medicalCoding?: MedicalCodingDatasetArtifacts|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
