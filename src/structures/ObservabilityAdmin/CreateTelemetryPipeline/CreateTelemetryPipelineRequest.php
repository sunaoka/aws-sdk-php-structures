<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\TelemetryPipelineConfiguration $Configuration
 * @property array<string, string>|null $Tags
 */
class CreateTelemetryPipelineRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration: Shapes\TelemetryPipelineConfiguration,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
