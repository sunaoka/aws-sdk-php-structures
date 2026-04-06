<?php

namespace Sunaoka\Aws\Structures\RAM\ListSourceAssociations;

trait ListSourceAssociationsTrait
{
    /**
     * @param ListSourceAssociationsRequest $args
     * @return ListSourceAssociationsResponse
     */
    public function listSourceAssociations(ListSourceAssociationsRequest $args)
    {
        $result = parent::listSourceAssociations($args->toArray());
        return new ListSourceAssociationsResponse($result->toArray());
    }
}
