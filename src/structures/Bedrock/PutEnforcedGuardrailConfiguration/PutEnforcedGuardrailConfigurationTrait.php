<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutEnforcedGuardrailConfiguration;

trait PutEnforcedGuardrailConfigurationTrait
{
    /**
     * @param PutEnforcedGuardrailConfigurationRequest $args
     * @return PutEnforcedGuardrailConfigurationResponse
     */
    public function putEnforcedGuardrailConfiguration(PutEnforcedGuardrailConfigurationRequest $args)
    {
        $result = parent::putEnforcedGuardrailConfiguration($args->toArray());
        return new PutEnforcedGuardrailConfigurationResponse($result->toArray());
    }
}
