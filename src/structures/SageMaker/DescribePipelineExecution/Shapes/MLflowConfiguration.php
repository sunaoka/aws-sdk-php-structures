<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MlflowResourceArn
 * @property string|null $MlflowExperimentName
 */
class MLflowConfiguration extends Shape
{
    /**
     * @param array{
     *     MlflowResourceArn?: string|null,
     *     MlflowExperimentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
