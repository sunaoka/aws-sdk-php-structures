<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateDatasetEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroundTruth
 */
class DatasetChanges extends Shape
{
    /**
     * @param array{GroundTruth: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
