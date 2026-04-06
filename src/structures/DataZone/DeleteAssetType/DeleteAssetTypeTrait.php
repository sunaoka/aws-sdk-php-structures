<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteAssetType;

trait DeleteAssetTypeTrait
{
    /**
     * @param DeleteAssetTypeRequest $args
     * @return DeleteAssetTypeResponse
     */
    public function deleteAssetType(DeleteAssetTypeRequest $args)
    {
        $result = parent::deleteAssetType($args->toArray());
        return new DeleteAssetTypeResponse($result->toArray());
    }
}
