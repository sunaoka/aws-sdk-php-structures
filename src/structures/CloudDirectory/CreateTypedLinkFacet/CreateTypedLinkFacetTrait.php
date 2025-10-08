<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateTypedLinkFacet;

trait CreateTypedLinkFacetTrait
{
    /**
     * @param CreateTypedLinkFacetRequest $args
     * @return CreateTypedLinkFacetResponse
     */
    public function createTypedLinkFacet(CreateTypedLinkFacetRequest $args)
    {
        $result = parent::createTypedLinkFacet($args->toArray());
        return new CreateTypedLinkFacetResponse($result->toArray());
    }
}
