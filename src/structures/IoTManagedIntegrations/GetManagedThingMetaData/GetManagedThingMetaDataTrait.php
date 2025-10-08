<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingMetaData;

trait GetManagedThingMetaDataTrait
{
    /**
     * @param GetManagedThingMetaDataRequest $args
     * @return GetManagedThingMetaDataResponse
     */
    public function getManagedThingMetaData(GetManagedThingMetaDataRequest $args)
    {
        $result = parent::getManagedThingMetaData($args->toArray());
        return new GetManagedThingMetaDataResponse($result->toArray());
    }
}
