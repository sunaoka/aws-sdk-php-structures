<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ValidateTelemetryPipelineConfiguration;

trait ValidateTelemetryPipelineConfigurationTrait
{
    /**
     * @param ValidateTelemetryPipelineConfigurationRequest $args
     * @return ValidateTelemetryPipelineConfigurationResponse
     */
    public function validateTelemetryPipelineConfiguration(ValidateTelemetryPipelineConfigurationRequest $args)
    {
        $result = parent::validateTelemetryPipelineConfiguration($args->toArray());
        return new ValidateTelemetryPipelineConfigurationResponse($result->toArray());
    }
}
