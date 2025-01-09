<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineName
 * @property StageContext $stage
 * @property ActionContext $action
 * @property string $pipelineArn
 * @property string $pipelineExecutionId
 */
class PipelineContext extends Shape
{
    /**
     * @param array{
     *     pipelineName?: string,
     *     stage?: StageContext,
     *     action?: ActionContext,
     *     pipelineArn?: string,
     *     pipelineExecutionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
