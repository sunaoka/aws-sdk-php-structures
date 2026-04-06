<?php

namespace Sunaoka\Aws\Structures\Iot\GetThingConnectivityData;

trait GetThingConnectivityDataTrait
{
    /**
     * @param GetThingConnectivityDataRequest $args
     * @return GetThingConnectivityDataResponse
     */
    public function getThingConnectivityData(GetThingConnectivityDataRequest $args)
    {
        $result = parent::getThingConnectivityData($args->toArray());
        return new GetThingConnectivityDataResponse($result->toArray());
    }
}
