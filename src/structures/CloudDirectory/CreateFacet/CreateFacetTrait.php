<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateFacet;

trait CreateFacetTrait
{
    /**
     * @param CreateFacetRequest $args
     * @return CreateFacetResponse
     */
    public function createFacet(CreateFacetRequest $args)
    {
        $result = parent::createFacet($args->toArray());
        return new CreateFacetResponse($result->toArray());
    }
}
