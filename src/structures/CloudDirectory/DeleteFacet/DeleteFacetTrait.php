<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DeleteFacet;

trait DeleteFacetTrait
{
    /**
     * @param DeleteFacetRequest $args
     * @return DeleteFacetResponse
     */
    public function deleteFacet(DeleteFacetRequest $args)
    {
        $result = parent::deleteFacet($args->toArray());
        return new DeleteFacetResponse($result->toArray());
    }
}
