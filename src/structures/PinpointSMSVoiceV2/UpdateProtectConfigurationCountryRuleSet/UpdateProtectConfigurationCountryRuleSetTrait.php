<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateProtectConfigurationCountryRuleSet;

trait UpdateProtectConfigurationCountryRuleSetTrait
{
    /**
     * @param UpdateProtectConfigurationCountryRuleSetRequest $args
     * @return UpdateProtectConfigurationCountryRuleSetResponse
     */
    public function updateProtectConfigurationCountryRuleSet(UpdateProtectConfigurationCountryRuleSetRequest $args)
    {
        $result = parent::updateProtectConfigurationCountryRuleSet($args->toArray());
        return new UpdateProtectConfigurationCountryRuleSetResponse($result->toArray());
    }
}
