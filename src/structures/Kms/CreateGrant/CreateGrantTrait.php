<?php

namespace Sunaoka\Aws\Structures\Kms\CreateGrant;

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
