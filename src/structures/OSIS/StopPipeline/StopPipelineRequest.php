<?php

namespace Sunaoka\Aws\Structures\OSIS\StopPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 */
class StopPipelineRequest extends Request
{
    /**
     * @param array{PipelineName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
