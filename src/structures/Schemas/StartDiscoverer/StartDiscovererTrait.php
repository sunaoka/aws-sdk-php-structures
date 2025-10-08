<?php

namespace Sunaoka\Aws\Structures\Schemas\StartDiscoverer;

trait StartDiscovererTrait
{
    /**
     * @param StartDiscovererRequest $args
     * @return StartDiscovererResponse
     */
    public function startDiscoverer(StartDiscovererRequest $args)
    {
        $result = parent::startDiscoverer($args->toArray());
        return new StartDiscovererResponse($result->toArray());
    }
}
