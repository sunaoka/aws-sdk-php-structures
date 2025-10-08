<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetOfferingStatus;

trait GetOfferingStatusTrait
{
    /**
     * @param GetOfferingStatusRequest $args
     * @return GetOfferingStatusResponse
     */
    public function getOfferingStatus(GetOfferingStatusRequest $args)
    {
        $result = parent::getOfferingStatus($args->toArray());
        return new GetOfferingStatusResponse($result->toArray());
    }
}
