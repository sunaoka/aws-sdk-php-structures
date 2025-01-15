<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainingData|null $Input
 * @property TrainingData|null $Output
 * @property ValidationData|null $Validation
 */
class TrainingDataResult extends Shape
{
    /**
     * @param array{
     *     Input?: TrainingData|null,
     *     Output?: TrainingData|null,
     *     Validation?: ValidationData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
