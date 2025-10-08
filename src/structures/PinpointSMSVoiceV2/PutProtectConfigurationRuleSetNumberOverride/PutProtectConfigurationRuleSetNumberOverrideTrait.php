<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutProtectConfigurationRuleSetNumberOverride;

trait PutProtectConfigurationRuleSetNumberOverrideTrait
{
    /**
     * @param PutProtectConfigurationRuleSetNumberOverrideRequest $args
     * @return PutProtectConfigurationRuleSetNumberOverrideResponse
     */
    public function putProtectConfigurationRuleSetNumberOverride(PutProtectConfigurationRuleSetNumberOverrideRequest $args)
    {
        $result = parent::putProtectConfigurationRuleSetNumberOverride($args->toArray());
        return new PutProtectConfigurationRuleSetNumberOverrideResponse($result->toArray());
    }
}
