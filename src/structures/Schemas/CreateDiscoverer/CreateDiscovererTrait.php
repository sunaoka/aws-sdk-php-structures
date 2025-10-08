<?php

namespace Sunaoka\Aws\Structures\Schemas\CreateDiscoverer;

trait CreateDiscovererTrait
{
    /**
     * @param CreateDiscovererRequest $args
     * @return CreateDiscovererResponse
     */
    public function createDiscoverer(CreateDiscovererRequest $args)
    {
        $result = parent::createDiscoverer($args->toArray());
        return new CreateDiscovererResponse($result->toArray());
    }
}
