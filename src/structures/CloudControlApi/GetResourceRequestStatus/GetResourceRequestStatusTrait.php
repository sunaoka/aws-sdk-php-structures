<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\GetResourceRequestStatus;

trait GetResourceRequestStatusTrait
{
    /**
     * @param GetResourceRequestStatusRequest $args
     * @return GetResourceRequestStatusResponse
     */
    public function getResourceRequestStatus(GetResourceRequestStatusRequest $args)
    {
        $result = parent::getResourceRequestStatus($args->toArray());
        return new GetResourceRequestStatusResponse($result->toArray());
    }
}
