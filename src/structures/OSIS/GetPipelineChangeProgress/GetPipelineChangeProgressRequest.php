<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineChangeProgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 */
class GetPipelineChangeProgressRequest extends Request
{
    /**
     * @param array{PipelineName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
