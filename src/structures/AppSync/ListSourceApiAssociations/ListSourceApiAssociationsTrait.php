<?php

namespace Sunaoka\Aws\Structures\AppSync\ListSourceApiAssociations;

trait ListSourceApiAssociationsTrait
{
    /**
     * @param ListSourceApiAssociationsRequest $args
     * @return ListSourceApiAssociationsResponse
     */
    public function listSourceApiAssociations(ListSourceApiAssociationsRequest $args)
    {
        $result = parent::listSourceApiAssociations($args->toArray());
        return new ListSourceApiAssociationsResponse($result->toArray());
    }
}
