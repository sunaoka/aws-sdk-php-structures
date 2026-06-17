<?php

namespace Sunaoka\Aws\Structures\Glue\PutAssetType;

trait PutAssetTypeTrait
{
    /**
     * @param PutAssetTypeRequest $args
     * @return PutAssetTypeResponse
     */
    public function putAssetType(PutAssetTypeRequest $args)
    {
        $result = parent::putAssetType($args->toArray());
        return new PutAssetTypeResponse($result->toArray());
    }
}
