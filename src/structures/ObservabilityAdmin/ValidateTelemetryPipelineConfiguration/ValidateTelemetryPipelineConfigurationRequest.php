<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ValidateTelemetryPipelineConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TelemetryPipelineConfiguration $Configuration
 */
class ValidateTelemetryPipelineConfigurationRequest extends Request
{
    /**
     * @param array{Configuration: Shapes\TelemetryPipelineConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
