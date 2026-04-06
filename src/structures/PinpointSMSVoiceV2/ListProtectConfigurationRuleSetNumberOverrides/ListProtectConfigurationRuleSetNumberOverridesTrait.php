<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListProtectConfigurationRuleSetNumberOverrides;

trait ListProtectConfigurationRuleSetNumberOverridesTrait
{
    /**
     * @param ListProtectConfigurationRuleSetNumberOverridesRequest $args
     * @return ListProtectConfigurationRuleSetNumberOverridesResponse
     */
    public function listProtectConfigurationRuleSetNumberOverrides(ListProtectConfigurationRuleSetNumberOverridesRequest $args)
    {
        $result = parent::listProtectConfigurationRuleSetNumberOverrides($args->toArray());
        return new ListProtectConfigurationRuleSetNumberOverridesResponse($result->toArray());
    }
}
