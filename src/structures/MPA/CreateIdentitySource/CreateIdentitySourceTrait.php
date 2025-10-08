<?php

namespace Sunaoka\Aws\Structures\MPA\CreateIdentitySource;

trait CreateIdentitySourceTrait
{
    /**
     * @param CreateIdentitySourceRequest $args
     * @return CreateIdentitySourceResponse
     */
    public function createIdentitySource(CreateIdentitySourceRequest $args)
    {
        $result = parent::createIdentitySource($args->toArray());
        return new CreateIdentitySourceResponse($result->toArray());
    }
}
