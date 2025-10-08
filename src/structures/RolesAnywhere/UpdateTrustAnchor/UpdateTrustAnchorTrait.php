<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateTrustAnchor;

trait UpdateTrustAnchorTrait
{
    /**
     * @param UpdateTrustAnchorRequest $args
     * @return UpdateTrustAnchorResponse
     */
    public function updateTrustAnchor(UpdateTrustAnchorRequest $args)
    {
        $result = parent::updateTrustAnchor($args->toArray());
        return new UpdateTrustAnchorResponse($result->toArray());
    }
}
