<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainingData $Input
 * @property TrainingData $Output
 * @property ValidationData $Validation
 */
class TrainingDataResult extends Shape
{
    /**
     * @param array{
     *     Input?: TrainingData,
     *     Output?: TrainingData,
     *     Validation?: ValidationData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
