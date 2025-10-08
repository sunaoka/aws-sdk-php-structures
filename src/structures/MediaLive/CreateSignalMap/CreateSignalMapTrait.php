<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateSignalMap;

trait CreateSignalMapTrait
{
    /**
     * @param CreateSignalMapRequest $args
     * @return CreateSignalMapResponse
     */
    public function createSignalMap(CreateSignalMapRequest $args)
    {
        $result = parent::createSignalMap($args->toArray());
        return new CreateSignalMapResponse($result->toArray());
    }
}
