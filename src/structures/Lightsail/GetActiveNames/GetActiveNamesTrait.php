<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetActiveNames;

trait GetActiveNamesTrait
{
    /**
     * @param GetActiveNamesRequest $args
     * @return GetActiveNamesResponse
     */
    public function getActiveNames(GetActiveNamesRequest $args)
    {
        $result = parent::getActiveNames($args->toArray());
        return new GetActiveNamesResponse($result->toArray());
    }
}
