<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAsset;

trait CreateAssetTrait
{
    /**
     * @param CreateAssetRequest $args
     * @return CreateAssetResponse
     */
    public function createAsset(CreateAssetRequest $args)
    {
        $result = parent::createAsset($args->toArray());
        return new CreateAssetResponse($result->toArray());
    }
}
