<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfileResourceAssociations;

trait ListProfileResourceAssociationsTrait
{
    /**
     * @param ListProfileResourceAssociationsRequest $args
     * @return ListProfileResourceAssociationsResponse
     */
    public function listProfileResourceAssociations(ListProfileResourceAssociationsRequest $args)
    {
        $result = parent::listProfileResourceAssociations($args->toArray());
        return new ListProfileResourceAssociationsResponse($result->toArray());
    }
}
