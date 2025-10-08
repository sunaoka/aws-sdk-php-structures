<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorized;

trait BatchIsAuthorizedTrait
{
    /**
     * @param BatchIsAuthorizedRequest $args
     * @return BatchIsAuthorizedResponse
     */
    public function batchIsAuthorized(BatchIsAuthorizedRequest $args)
    {
        $result = parent::batchIsAuthorized($args->toArray());
        return new BatchIsAuthorizedResponse($result->toArray());
    }
}
