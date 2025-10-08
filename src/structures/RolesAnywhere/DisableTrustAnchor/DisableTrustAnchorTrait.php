<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DisableTrustAnchor;

trait DisableTrustAnchorTrait
{
    /**
     * @param DisableTrustAnchorRequest $args
     * @return DisableTrustAnchorResponse
     */
    public function disableTrustAnchor(DisableTrustAnchorRequest $args)
    {
        $result = parent::disableTrustAnchor($args->toArray());
        return new DisableTrustAnchorResponse($result->toArray());
    }
}
