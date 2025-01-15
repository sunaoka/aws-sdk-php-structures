<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineName
 * @property StageContext|null $stage
 * @property ActionContext|null $action
 * @property string|null $pipelineArn
 * @property string|null $pipelineExecutionId
 */
class PipelineContext extends Shape
{
    /**
     * @param array{
     *     pipelineName?: string|null,
     *     stage?: StageContext|null,
     *     action?: ActionContext|null,
     *     pipelineArn?: string|null,
     *     pipelineExecutionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
