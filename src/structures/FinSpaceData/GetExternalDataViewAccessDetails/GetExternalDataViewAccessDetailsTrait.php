<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetExternalDataViewAccessDetails;

trait GetExternalDataViewAccessDetailsTrait
{
    /**
     * @param GetExternalDataViewAccessDetailsRequest $args
     * @return GetExternalDataViewAccessDetailsResponse
     */
    public function getExternalDataViewAccessDetails(GetExternalDataViewAccessDetailsRequest $args)
    {
        $result = parent::getExternalDataViewAccessDetails($args->toArray());
        return new GetExternalDataViewAccessDetailsResponse($result->toArray());
    }
}
