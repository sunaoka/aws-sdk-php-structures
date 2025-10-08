<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceAccessDetails;

trait GetInstanceAccessDetailsTrait
{
    /**
     * @param GetInstanceAccessDetailsRequest $args
     * @return GetInstanceAccessDetailsResponse
     */
    public function getInstanceAccessDetails(GetInstanceAccessDetailsRequest $args)
    {
        $result = parent::getInstanceAccessDetails($args->toArray());
        return new GetInstanceAccessDetailsResponse($result->toArray());
    }
}
