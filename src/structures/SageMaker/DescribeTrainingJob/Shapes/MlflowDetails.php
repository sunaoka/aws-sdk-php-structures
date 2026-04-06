<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MlflowExperimentId
 * @property string|null $MlflowRunId
 */
class MlflowDetails extends Shape
{
    /**
     * @param array{
     *     MlflowExperimentId?: string|null,
     *     MlflowRunId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
