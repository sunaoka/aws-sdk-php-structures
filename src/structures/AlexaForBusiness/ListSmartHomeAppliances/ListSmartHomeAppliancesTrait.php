<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSmartHomeAppliances;

trait ListSmartHomeAppliancesTrait
{
    /**
     * @param ListSmartHomeAppliancesRequest $args
     * @return ListSmartHomeAppliancesResponse
     */
    public function listSmartHomeAppliances(ListSmartHomeAppliancesRequest $args)
    {
        $result = parent::listSmartHomeAppliances($args->toArray());
        return new ListSmartHomeAppliancesResponse($result->toArray());
    }
}
