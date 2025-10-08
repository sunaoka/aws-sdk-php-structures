<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListTypedLinkFacetNames;

trait ListTypedLinkFacetNamesTrait
{
    /**
     * @param ListTypedLinkFacetNamesRequest $args
     * @return ListTypedLinkFacetNamesResponse
     */
    public function listTypedLinkFacetNames(ListTypedLinkFacetNamesRequest $args)
    {
        $result = parent::listTypedLinkFacetNames($args->toArray());
        return new ListTypedLinkFacetNamesResponse($result->toArray());
    }
}
