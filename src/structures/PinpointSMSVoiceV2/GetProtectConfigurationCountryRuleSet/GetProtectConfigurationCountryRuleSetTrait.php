<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\GetProtectConfigurationCountryRuleSet;

trait GetProtectConfigurationCountryRuleSetTrait
{
    /**
     * @param GetProtectConfigurationCountryRuleSetRequest $args
     * @return GetProtectConfigurationCountryRuleSetResponse
     */
    public function getProtectConfigurationCountryRuleSet(GetProtectConfigurationCountryRuleSetRequest $args)
    {
        $result = parent::getProtectConfigurationCountryRuleSet($args->toArray());
        return new GetProtectConfigurationCountryRuleSetResponse($result->toArray());
    }
}
