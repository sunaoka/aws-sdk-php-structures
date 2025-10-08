<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingConnectivityData;

trait GetManagedThingConnectivityDataTrait
{
    /**
     * @param GetManagedThingConnectivityDataRequest $args
     * @return GetManagedThingConnectivityDataResponse
     */
    public function getManagedThingConnectivityData(GetManagedThingConnectivityDataRequest $args)
    {
        $result = parent::getManagedThingConnectivityData($args->toArray());
        return new GetManagedThingConnectivityDataResponse($result->toArray());
    }
}
