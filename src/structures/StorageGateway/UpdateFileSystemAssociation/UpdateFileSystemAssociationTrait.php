<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateFileSystemAssociation;

trait UpdateFileSystemAssociationTrait
{
    /**
     * @param UpdateFileSystemAssociationRequest $args
     * @return UpdateFileSystemAssociationResponse
     */
    public function updateFileSystemAssociation(UpdateFileSystemAssociationRequest $args)
    {
        $result = parent::updateFileSystemAssociation($args->toArray());
        return new UpdateFileSystemAssociationResponse($result->toArray());
    }
}
