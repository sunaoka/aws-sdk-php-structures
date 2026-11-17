<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListContextStoreAssociations;

trait ListContextStoreAssociationsTrait
{
    /**
     * @param ListContextStoreAssociationsRequest $args
     * @return ListContextStoreAssociationsResponse
     */
    public function listContextStoreAssociations(ListContextStoreAssociationsRequest $args)
    {
        $result = parent::listContextStoreAssociations($args->toArray());
        return new ListContextStoreAssociationsResponse($result->toArray());
    }
}
