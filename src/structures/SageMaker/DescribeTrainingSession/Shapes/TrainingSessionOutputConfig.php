<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainingSessionS3Location $S3Location
 */
class TrainingSessionOutputConfig extends Shape
{
    /**
     * @param array{S3Location: TrainingSessionS3Location} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
