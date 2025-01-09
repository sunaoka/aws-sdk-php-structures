<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipelineDefinitionForExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 */
class DescribePipelineDefinitionForExecutionRequest extends Request
{
    /**
     * @param array{PipelineExecutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
