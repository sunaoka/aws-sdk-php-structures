<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateTypedLinkFacet;

trait UpdateTypedLinkFacetTrait
{
    /**
     * @param UpdateTypedLinkFacetRequest $args
     * @return UpdateTypedLinkFacetResponse
     */
    public function updateTypedLinkFacet(UpdateTypedLinkFacetRequest $args)
    {
        $result = parent::updateTypedLinkFacet($args->toArray());
        return new UpdateTypedLinkFacetResponse($result->toArray());
    }
}
