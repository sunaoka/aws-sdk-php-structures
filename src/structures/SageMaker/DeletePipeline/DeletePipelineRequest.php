<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeletePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property string $ClientRequestToken
 */
class DeletePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
