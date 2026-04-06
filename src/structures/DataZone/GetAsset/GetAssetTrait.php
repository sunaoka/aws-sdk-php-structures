<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAsset;

trait GetAssetTrait
{
    /**
     * @param GetAssetRequest $args
     * @return GetAssetResponse
     */
    public function getAsset(GetAssetRequest $args)
    {
        $result = parent::getAsset($args->toArray());
        return new GetAssetResponse($result->toArray());
    }
}
