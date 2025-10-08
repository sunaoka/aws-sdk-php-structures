<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplex;

trait DeleteMultiplexTrait
{
    /**
     * @param DeleteMultiplexRequest $args
     * @return DeleteMultiplexResponse
     */
    public function deleteMultiplex(DeleteMultiplexRequest $args)
    {
        $result = parent::deleteMultiplex($args->toArray());
        return new DeleteMultiplexResponse($result->toArray());
    }
}
