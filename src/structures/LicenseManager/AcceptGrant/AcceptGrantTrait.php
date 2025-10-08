<?php

namespace Sunaoka\Aws\Structures\LicenseManager\AcceptGrant;

trait AcceptGrantTrait
{
    /**
     * @param AcceptGrantRequest $args
     * @return AcceptGrantResponse
     */
    public function acceptGrant(AcceptGrantRequest $args)
    {
        $result = parent::acceptGrant($args->toArray());
        return new AcceptGrantResponse($result->toArray());
    }
}
