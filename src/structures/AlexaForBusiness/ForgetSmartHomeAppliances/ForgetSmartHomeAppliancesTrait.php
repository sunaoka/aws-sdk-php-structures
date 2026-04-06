<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ForgetSmartHomeAppliances;

trait ForgetSmartHomeAppliancesTrait
{
    /**
     * @param ForgetSmartHomeAppliancesRequest $args
     * @return ForgetSmartHomeAppliancesResponse
     */
    public function forgetSmartHomeAppliances(ForgetSmartHomeAppliancesRequest $args)
    {
        $result = parent::forgetSmartHomeAppliances($args->toArray());
        return new ForgetSmartHomeAppliancesResponse($result->toArray());
    }
}
