<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetRelationships;

trait ListAssetRelationshipsTrait
{
    /**
     * @param ListAssetRelationshipsRequest $args
     * @return ListAssetRelationshipsResponse
     */
    public function listAssetRelationships(ListAssetRelationshipsRequest $args)
    {
        $result = parent::listAssetRelationships($args->toArray());
        return new ListAssetRelationshipsResponse($result->toArray());
    }
}
