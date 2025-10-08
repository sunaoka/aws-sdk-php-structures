<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetSignalMap;

trait GetSignalMapTrait
{
    /**
     * @param GetSignalMapRequest $args
     * @return GetSignalMapResponse
     */
    public function getSignalMap(GetSignalMapRequest $args)
    {
        $result = parent::getSignalMap($args->toArray());
        return new GetSignalMapResponse($result->toArray());
    }
}
