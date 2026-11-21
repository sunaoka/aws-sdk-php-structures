<?php

namespace Sunaoka\Aws\Structures\APIPortal\StartDiscovery;

trait StartDiscoveryTrait
{
    /**
     * @param StartDiscoveryRequest $args
     * @return void
     */
    public function startDiscovery(StartDiscoveryRequest $args)
    {
        parent::startDiscovery($args->toArray());
    }
}
