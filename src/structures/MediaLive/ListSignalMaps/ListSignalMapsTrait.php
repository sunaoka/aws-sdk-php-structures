<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListSignalMaps;

trait ListSignalMapsTrait
{
    /**
     * @param ListSignalMapsRequest $args
     * @return ListSignalMapsResponse
     */
    public function listSignalMaps(ListSignalMapsRequest $args)
    {
        $result = parent::listSignalMaps($args->toArray());
        return new ListSignalMapsResponse($result->toArray());
    }
}
