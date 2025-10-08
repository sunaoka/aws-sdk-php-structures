<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplex;

trait UpdateMultiplexTrait
{
    /**
     * @param UpdateMultiplexRequest $args
     * @return UpdateMultiplexResponse
     */
    public function updateMultiplex(UpdateMultiplexRequest $args)
    {
        $result = parent::updateMultiplex($args->toArray());
        return new UpdateMultiplexResponse($result->toArray());
    }
}
