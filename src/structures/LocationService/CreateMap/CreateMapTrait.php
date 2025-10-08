<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateMap;

trait CreateMapTrait
{
    /**
     * @param CreateMapRequest $args
     * @return CreateMapResponse
     */
    public function createMap(CreateMapRequest $args)
    {
        $result = parent::createMap($args->toArray());
        return new CreateMapResponse($result->toArray());
    }
}
