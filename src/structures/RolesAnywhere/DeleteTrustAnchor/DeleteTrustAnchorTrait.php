<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteTrustAnchor;

trait DeleteTrustAnchorTrait
{
    /**
     * @param DeleteTrustAnchorRequest $args
     * @return DeleteTrustAnchorResponse
     */
    public function deleteTrustAnchor(DeleteTrustAnchorRequest $args)
    {
        $result = parent::deleteTrustAnchor($args->toArray());
        return new DeleteTrustAnchorResponse($result->toArray());
    }
}
