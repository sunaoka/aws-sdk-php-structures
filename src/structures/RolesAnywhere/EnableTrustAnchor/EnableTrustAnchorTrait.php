<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\EnableTrustAnchor;

trait EnableTrustAnchorTrait
{
    /**
     * @param EnableTrustAnchorRequest $args
     * @return EnableTrustAnchorResponse
     */
    public function enableTrustAnchor(EnableTrustAnchorRequest $args)
    {
        $result = parent::enableTrustAnchor($args->toArray());
        return new EnableTrustAnchorResponse($result->toArray());
    }
}
