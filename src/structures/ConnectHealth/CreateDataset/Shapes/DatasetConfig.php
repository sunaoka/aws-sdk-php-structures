<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MedicalCodingDatasetConfig|null $medicalCoding
 */
class DatasetConfig extends Shape
{
    /**
     * @param array{medicalCoding?: MedicalCodingDatasetConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
