<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateTelemetryPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineIdentifier
 * @property Shapes\TelemetryPipelineConfiguration $Configuration
 */
class UpdateTelemetryPipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineIdentifier: string,
     *     Configuration: Shapes\TelemetryPipelineConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
