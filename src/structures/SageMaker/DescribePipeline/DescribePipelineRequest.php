<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property int<1, max>|null $PipelineVersionId
 */
class DescribePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     PipelineVersionId?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
