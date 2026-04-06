<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 */
class DescribePipelineRequest extends Request
{
    /**
     * @param array{PipelineName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
