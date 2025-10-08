<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetStaticMap;

trait GetStaticMapTrait
{
    /**
     * @param GetStaticMapRequest $args
     * @return GetStaticMapResponse
     */
    public function getStaticMap(GetStaticMapRequest $args)
    {
        $result = parent::getStaticMap($args->toArray());
        return new GetStaticMapResponse($result->toArray());
    }
}
