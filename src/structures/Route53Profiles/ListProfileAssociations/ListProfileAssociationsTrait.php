<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfileAssociations;

trait ListProfileAssociationsTrait
{
    /**
     * @param ListProfileAssociationsRequest $args
     * @return ListProfileAssociationsResponse
     */
    public function listProfileAssociations(ListProfileAssociationsRequest $args)
    {
        $result = parent::listProfileAssociations($args->toArray());
        return new ListProfileAssociationsResponse($result->toArray());
    }
}
