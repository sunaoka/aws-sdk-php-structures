<?php

namespace Sunaoka\Aws\Structures\APIPortal\StopDiscovery;

trait StopDiscoveryTrait
{
    /**
     * @param StopDiscoveryRequest $args
     * @return void
     */
    public function stopDiscovery(StopDiscoveryRequest $args)
    {
        parent::stopDiscovery($args->toArray());
    }
}
