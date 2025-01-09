<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rollbackTargetPipelineExecutionId
 */
class PipelineRollbackMetadata extends Shape
{
    /**
     * @param array{rollbackTargetPipelineExecutionId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
