<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateDatasetEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $GroundTruth
 */
class DatasetChanges extends Shape
{
    /**
     * @param array{GroundTruth: string|resource|\Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
