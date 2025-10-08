<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteProtectConfigurationRuleSetNumberOverride;

trait DeleteProtectConfigurationRuleSetNumberOverrideTrait
{
    /**
     * @param DeleteProtectConfigurationRuleSetNumberOverrideRequest $args
     * @return DeleteProtectConfigurationRuleSetNumberOverrideResponse
     */
    public function deleteProtectConfigurationRuleSetNumberOverride(
        DeleteProtectConfigurationRuleSetNumberOverrideRequest $args,
    ) {
        $result = parent::deleteProtectConfigurationRuleSetNumberOverride($args->toArray());
        return new DeleteProtectConfigurationRuleSetNumberOverrideResponse($result->toArray());
    }
}
