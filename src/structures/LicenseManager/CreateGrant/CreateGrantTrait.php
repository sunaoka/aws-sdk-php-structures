<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateGrant;

trait CreateGrantTrait
{
    /**
     * @param CreateGrantRequest $args
     * @return CreateGrantResponse
     */
    public function createGrant(CreateGrantRequest $args)
    {
        $result = parent::createGrant($args->toArray());
        return new CreateGrantResponse($result->toArray());
    }
}
