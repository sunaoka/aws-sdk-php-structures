<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DeletePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 */
class DeletePipelineRequest extends Request
{
    /**
     * @param array{pipelineName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
