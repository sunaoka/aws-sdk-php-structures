<?php

namespace Sunaoka\Aws\Structures\OSIS\DeletePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 */
class DeletePipelineRequest extends Request
{
    /**
     * @param array{PipelineName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
