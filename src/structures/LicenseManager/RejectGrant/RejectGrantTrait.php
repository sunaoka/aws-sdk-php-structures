<?php

namespace Sunaoka\Aws\Structures\LicenseManager\RejectGrant;

trait RejectGrantTrait
{
    /**
     * @param RejectGrantRequest $args
     * @return RejectGrantResponse
     */
    public function rejectGrant(RejectGrantRequest $args)
    {
        $result = parent::rejectGrant($args->toArray());
        return new RejectGrantResponse($result->toArray());
    }
}
