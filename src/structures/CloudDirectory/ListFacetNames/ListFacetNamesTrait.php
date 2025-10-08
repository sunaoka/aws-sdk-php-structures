<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListFacetNames;

trait ListFacetNamesTrait
{
    /**
     * @param ListFacetNamesRequest $args
     * @return ListFacetNamesResponse
     */
    public function listFacetNames(ListFacetNamesRequest $args)
    {
        $result = parent::listFacetNames($args->toArray());
        return new ListFacetNamesResponse($result->toArray());
    }
}
