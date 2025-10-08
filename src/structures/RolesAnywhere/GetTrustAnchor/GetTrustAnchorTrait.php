<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetTrustAnchor;

trait GetTrustAnchorTrait
{
    /**
     * @param GetTrustAnchorRequest $args
     * @return GetTrustAnchorResponse
     */
    public function getTrustAnchor(GetTrustAnchorRequest $args)
    {
        $result = parent::getTrustAnchor($args->toArray());
        return new GetTrustAnchorResponse($result->toArray());
    }
}
