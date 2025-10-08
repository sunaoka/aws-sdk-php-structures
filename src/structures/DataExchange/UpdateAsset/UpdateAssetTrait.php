<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset;

trait UpdateAssetTrait
{
    /**
     * @param UpdateAssetRequest $args
     * @return UpdateAssetResponse
     */
    public function updateAsset(UpdateAssetRequest $args)
    {
        $result = parent::updateAsset($args->toArray());
        return new UpdateAssetResponse($result->toArray());
    }
}
