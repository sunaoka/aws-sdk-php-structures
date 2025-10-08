<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplex;

trait CreateMultiplexTrait
{
    /**
     * @param CreateMultiplexRequest $args
     * @return CreateMultiplexResponse
     */
    public function createMultiplex(CreateMultiplexRequest $args)
    {
        $result = parent::createMultiplex($args->toArray());
        return new CreateMultiplexResponse($result->toArray());
    }
}
