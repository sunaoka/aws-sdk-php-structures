<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\StartSmartHomeApplianceDiscovery;

trait StartSmartHomeApplianceDiscoveryTrait
{
    /**
     * @param StartSmartHomeApplianceDiscoveryRequest $args
     * @return StartSmartHomeApplianceDiscoveryResponse
     */
    public function startSmartHomeApplianceDiscovery(StartSmartHomeApplianceDiscoveryRequest $args)
    {
        $result = parent::startSmartHomeApplianceDiscovery($args->toArray());
        return new StartSmartHomeApplianceDiscoveryResponse($result->toArray());
    }
}
