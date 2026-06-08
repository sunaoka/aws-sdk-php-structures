<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateAsset;

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
