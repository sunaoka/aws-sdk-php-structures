<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEnforcedGuardrailsConfiguration;

trait ListEnforcedGuardrailsConfigurationTrait
{
    /**
     * @param ListEnforcedGuardrailsConfigurationRequest $args
     * @return ListEnforcedGuardrailsConfigurationResponse
     */
    public function listEnforcedGuardrailsConfiguration(ListEnforcedGuardrailsConfigurationRequest $args)
    {
        $result = parent::listEnforcedGuardrailsConfiguration($args->toArray());
        return new ListEnforcedGuardrailsConfigurationResponse($result->toArray());
    }
}
