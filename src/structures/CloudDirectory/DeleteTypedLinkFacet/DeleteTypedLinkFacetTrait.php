<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DeleteTypedLinkFacet;

trait DeleteTypedLinkFacetTrait
{
    /**
     * @param DeleteTypedLinkFacetRequest $args
     * @return DeleteTypedLinkFacetResponse
     */
    public function deleteTypedLinkFacet(DeleteTypedLinkFacetRequest $args)
    {
        $result = parent::deleteTypedLinkFacet($args->toArray());
        return new DeleteTypedLinkFacetResponse($result->toArray());
    }
}
