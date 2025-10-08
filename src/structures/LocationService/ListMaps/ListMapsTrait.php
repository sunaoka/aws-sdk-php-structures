<?php

namespace Sunaoka\Aws\Structures\LocationService\ListMaps;

trait ListMapsTrait
{
    /**
     * @param ListMapsRequest $args
     * @return ListMapsResponse
     */
    public function listMaps(ListMapsRequest $args)
    {
        $result = parent::listMaps($args->toArray());
        return new ListMapsResponse($result->toArray());
    }
}
