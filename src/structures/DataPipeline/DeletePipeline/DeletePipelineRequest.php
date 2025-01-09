<?php

namespace Sunaoka\Aws\Structures\DataPipeline\DeletePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 */
class DeletePipelineRequest extends Request
{
    /**
     * @param array{pipelineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
