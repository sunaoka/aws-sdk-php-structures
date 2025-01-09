<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 */
class DescribePipelineExecutionRequest extends Request
{
    /**
     * @param array{PipelineExecutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
