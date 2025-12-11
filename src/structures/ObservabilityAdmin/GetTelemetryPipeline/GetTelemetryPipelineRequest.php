<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineIdentifier
 */
class GetTelemetryPipelineRequest extends Request
{
    /**
     * @param array{PipelineIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
