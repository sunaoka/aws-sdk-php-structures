<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetContactReachabilityStatus;

trait GetContactReachabilityStatusTrait
{
    /**
     * @param GetContactReachabilityStatusRequest $args
     * @return GetContactReachabilityStatusResponse
     */
    public function getContactReachabilityStatus(GetContactReachabilityStatusRequest $args)
    {
        $result = parent::getContactReachabilityStatus($args->toArray());
        return new GetContactReachabilityStatusResponse($result->toArray());
    }
}
