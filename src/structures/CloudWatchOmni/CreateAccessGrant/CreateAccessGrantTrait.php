<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAccessGrant;

trait CreateAccessGrantTrait
{
    /**
     * @param CreateAccessGrantRequest $args
     * @return CreateAccessGrantResponse
     */
    public function createAccessGrant(CreateAccessGrantRequest $args)
    {
        $result = parent::createAccessGrant($args->toArray());
        return new CreateAccessGrantResponse($result->toArray());
    }
}
