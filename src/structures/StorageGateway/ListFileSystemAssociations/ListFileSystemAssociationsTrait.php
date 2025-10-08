<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileSystemAssociations;

trait ListFileSystemAssociationsTrait
{
    /**
     * @param ListFileSystemAssociationsRequest $args
     * @return ListFileSystemAssociationsResponse
     */
    public function listFileSystemAssociations(ListFileSystemAssociationsRequest $args)
    {
        $result = parent::listFileSystemAssociations($args->toArray());
        return new ListFileSystemAssociationsResponse($result->toArray());
    }
}
