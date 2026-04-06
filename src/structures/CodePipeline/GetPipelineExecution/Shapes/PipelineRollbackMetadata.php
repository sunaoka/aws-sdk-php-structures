<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rollbackTargetPipelineExecutionId
 */
class PipelineRollbackMetadata extends Shape
{
    /**
     * @param array{rollbackTargetPipelineExecutionId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
