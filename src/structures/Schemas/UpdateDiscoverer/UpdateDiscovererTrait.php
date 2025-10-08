<?php

namespace Sunaoka\Aws\Structures\Schemas\UpdateDiscoverer;

trait UpdateDiscovererTrait
{
    /**
     * @param UpdateDiscovererRequest $args
     * @return UpdateDiscovererResponse
     */
    public function updateDiscoverer(UpdateDiscovererRequest $args)
    {
        $result = parent::updateDiscoverer($args->toArray());
        return new UpdateDiscovererResponse($result->toArray());
    }
}
