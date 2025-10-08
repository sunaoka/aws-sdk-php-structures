<?php

namespace Sunaoka\Aws\Structures\Schemas\StopDiscoverer;

trait StopDiscovererTrait
{
    /**
     * @param StopDiscovererRequest $args
     * @return StopDiscovererResponse
     */
    public function stopDiscoverer(StopDiscovererRequest $args)
    {
        $result = parent::stopDiscoverer($args->toArray());
        return new StopDiscovererResponse($result->toArray());
    }
}
