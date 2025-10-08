<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListFacetAttributes;

trait ListFacetAttributesTrait
{
    /**
     * @param ListFacetAttributesRequest $args
     * @return ListFacetAttributesResponse
     */
    public function listFacetAttributes(ListFacetAttributesRequest $args)
    {
        $result = parent::listFacetAttributes($args->toArray());
        return new ListFacetAttributesResponse($result->toArray());
    }
}
