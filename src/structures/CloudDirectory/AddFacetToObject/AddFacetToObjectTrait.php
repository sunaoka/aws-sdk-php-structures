<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AddFacetToObject;

trait AddFacetToObjectTrait
{
    /**
     * @param AddFacetToObjectRequest $args
     * @return AddFacetToObjectResponse
     */
    public function addFacetToObject(AddFacetToObjectRequest $args)
    {
        $result = parent::addFacetToObject($args->toArray());
        return new AddFacetToObjectResponse($result->toArray());
    }
}
