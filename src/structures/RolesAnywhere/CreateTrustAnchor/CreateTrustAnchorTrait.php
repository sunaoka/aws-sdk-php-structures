<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\CreateTrustAnchor;

trait CreateTrustAnchorTrait
{
    /**
     * @param CreateTrustAnchorRequest $args
     * @return CreateTrustAnchorResponse
     */
    public function createTrustAnchor(CreateTrustAnchorRequest $args)
    {
        $result = parent::createTrustAnchor($args->toArray());
        return new CreateTrustAnchorResponse($result->toArray());
    }
}
