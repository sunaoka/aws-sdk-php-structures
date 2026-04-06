<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutAssetModelInterfaceRelationship;

trait PutAssetModelInterfaceRelationshipTrait
{
    /**
     * @param PutAssetModelInterfaceRelationshipRequest $args
     * @return PutAssetModelInterfaceRelationshipResponse
     */
    public function putAssetModelInterfaceRelationship(PutAssetModelInterfaceRelationshipRequest $args)
    {
        $result = parent::putAssetModelInterfaceRelationship($args->toArray());
        return new PutAssetModelInterfaceRelationshipResponse($result->toArray());
    }
}
