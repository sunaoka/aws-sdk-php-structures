<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListTypedLinkFacetAttributes;

trait ListTypedLinkFacetAttributesTrait
{
    /**
     * @param ListTypedLinkFacetAttributesRequest $args
     * @return ListTypedLinkFacetAttributesResponse
     */
    public function listTypedLinkFacetAttributes(ListTypedLinkFacetAttributesRequest $args)
    {
        $result = parent::listTypedLinkFacetAttributes($args->toArray());
        return new ListTypedLinkFacetAttributesResponse($result->toArray());
    }
}
