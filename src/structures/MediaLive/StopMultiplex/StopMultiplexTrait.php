<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopMultiplex;

trait StopMultiplexTrait
{
    /**
     * @param StopMultiplexRequest $args
     * @return StopMultiplexResponse
     */
    public function stopMultiplex(StopMultiplexRequest $args)
    {
        $result = parent::stopMultiplex($args->toArray());
        return new StopMultiplexResponse($result->toArray());
    }
}
