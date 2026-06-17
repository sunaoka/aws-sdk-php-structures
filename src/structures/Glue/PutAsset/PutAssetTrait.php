<?php

namespace Sunaoka\Aws\Structures\Glue\PutAsset;

trait PutAssetTrait
{
    /**
     * @param PutAssetRequest $args
     * @return PutAssetResponse
     */
    public function putAsset(PutAssetRequest $args)
    {
        $result = parent::putAsset($args->toArray());
        return new PutAssetResponse($result->toArray());
    }
}
