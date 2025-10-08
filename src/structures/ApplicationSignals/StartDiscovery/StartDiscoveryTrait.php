<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\StartDiscovery;

trait StartDiscoveryTrait
{
    /**
     * @param StartDiscoveryRequest $args
     * @return StartDiscoveryResponse
     */
    public function startDiscovery(StartDiscoveryRequest $args)
    {
        $result = parent::startDiscovery($args->toArray());
        return new StartDiscoveryResponse($result->toArray());
    }
}
