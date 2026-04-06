<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteAsset;

trait DeleteAssetTrait
{
    /**
     * @param DeleteAssetRequest $args
     * @return DeleteAssetResponse
     */
    public function deleteAsset(DeleteAssetRequest $args)
    {
        $result = parent::deleteAsset($args->toArray());
        return new DeleteAssetResponse($result->toArray());
    }
}
