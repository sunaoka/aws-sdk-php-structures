<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetGrant;

trait GetGrantTrait
{
    /**
     * @param GetGrantRequest $args
     * @return GetGrantResponse
     */
    public function getGrant(GetGrantRequest $args)
    {
        $result = parent::getGrant($args->toArray());
        return new GetGrantResponse($result->toArray());
    }
}
