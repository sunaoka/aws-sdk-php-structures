<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationGrant;

trait GetApplicationGrantTrait
{
    /**
     * @param GetApplicationGrantRequest $args
     * @return GetApplicationGrantResponse
     */
    public function getApplicationGrant(GetApplicationGrantRequest $args)
    {
        $result = parent::getApplicationGrant($args->toArray());
        return new GetApplicationGrantResponse($result->toArray());
    }
}
