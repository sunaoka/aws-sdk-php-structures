<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteTelemetryPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineIdentifier
 */
class DeleteTelemetryPipelineRequest extends Request
{
    /**
     * @param array{PipelineIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
