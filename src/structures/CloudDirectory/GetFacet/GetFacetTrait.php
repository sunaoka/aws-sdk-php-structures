<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetFacet;

trait GetFacetTrait
{
    /**
     * @param GetFacetRequest $args
     * @return GetFacetResponse
     */
    public function getFacet(GetFacetRequest $args)
    {
        $result = parent::getFacet($args->toArray());
        return new GetFacetResponse($result->toArray());
    }
}
