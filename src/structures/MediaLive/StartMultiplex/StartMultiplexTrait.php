<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMultiplex;

trait StartMultiplexTrait
{
    /**
     * @param StartMultiplexRequest $args
     * @return StartMultiplexResponse
     */
    public function startMultiplex(StartMultiplexRequest $args)
    {
        $result = parent::startMultiplex($args->toArray());
        return new StartMultiplexResponse($result->toArray());
    }
}
