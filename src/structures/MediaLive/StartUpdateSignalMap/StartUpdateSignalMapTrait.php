<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartUpdateSignalMap;

trait StartUpdateSignalMapTrait
{
    /**
     * @param StartUpdateSignalMapRequest $args
     * @return StartUpdateSignalMapResponse
     */
    public function startUpdateSignalMap(StartUpdateSignalMapRequest $args)
    {
        $result = parent::startUpdateSignalMap($args->toArray());
        return new StartUpdateSignalMapResponse($result->toArray());
    }
}
