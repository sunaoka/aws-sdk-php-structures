<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 */
class GetPipelineRequest extends Request
{
    /**
     * @param array{PipelineName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
