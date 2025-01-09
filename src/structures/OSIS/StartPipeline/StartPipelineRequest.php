<?php

namespace Sunaoka\Aws\Structures\OSIS\StartPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 */
class StartPipelineRequest extends Request
{
    /**
     * @param array{PipelineName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
