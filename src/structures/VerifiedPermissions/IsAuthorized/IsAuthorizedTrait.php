<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorized;

trait IsAuthorizedTrait
{
    /**
     * @param IsAuthorizedRequest $args
     * @return IsAuthorizedResponse
     */
    public function isAuthorized(IsAuthorizedRequest $args)
    {
        $result = parent::isAuthorized($args->toArray());
        return new IsAuthorizedResponse($result->toArray());
    }
}
