<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteDeviceUsageData;

trait DeleteDeviceUsageDataTrait
{
    /**
     * @param DeleteDeviceUsageDataRequest $args
     * @return DeleteDeviceUsageDataResponse
     */
    public function deleteDeviceUsageData(DeleteDeviceUsageDataRequest $args)
    {
        $result = parent::deleteDeviceUsageData($args->toArray());
        return new DeleteDeviceUsageDataResponse($result->toArray());
    }
}
