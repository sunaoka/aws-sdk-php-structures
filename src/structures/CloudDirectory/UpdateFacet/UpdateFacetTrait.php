<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateFacet;

trait UpdateFacetTrait
{
    /**
     * @param UpdateFacetRequest $args
     * @return UpdateFacetResponse
     */
    public function updateFacet(UpdateFacetRequest $args)
    {
        $result = parent::updateFacet($args->toArray());
        return new UpdateFacetResponse($result->toArray());
    }
}
