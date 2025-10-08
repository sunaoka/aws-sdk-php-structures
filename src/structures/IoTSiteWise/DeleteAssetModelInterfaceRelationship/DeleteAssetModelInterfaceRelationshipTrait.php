<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModelInterfaceRelationship;

trait DeleteAssetModelInterfaceRelationshipTrait
{
    /**
     * @param DeleteAssetModelInterfaceRelationshipRequest $args
     * @return DeleteAssetModelInterfaceRelationshipResponse
     */
    public function deleteAssetModelInterfaceRelationship(DeleteAssetModelInterfaceRelationshipRequest $args)
    {
        $result = parent::deleteAssetModelInterfaceRelationship($args->toArray());
        return new DeleteAssetModelInterfaceRelationshipResponse($result->toArray());
    }
}
