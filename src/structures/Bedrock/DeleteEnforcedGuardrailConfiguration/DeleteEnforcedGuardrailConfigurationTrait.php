<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteEnforcedGuardrailConfiguration;

trait DeleteEnforcedGuardrailConfigurationTrait
{
    /**
     * @param DeleteEnforcedGuardrailConfigurationRequest $args
     * @return DeleteEnforcedGuardrailConfigurationResponse
     */
    public function deleteEnforcedGuardrailConfiguration(DeleteEnforcedGuardrailConfigurationRequest $args)
    {
        $result = parent::deleteEnforcedGuardrailConfiguration($args->toArray());
        return new DeleteEnforcedGuardrailConfigurationResponse($result->toArray());
    }
}
