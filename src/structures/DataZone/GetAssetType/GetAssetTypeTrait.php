<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetType;

trait GetAssetTypeTrait
{
    /**
     * @param GetAssetTypeRequest $args
     * @return GetAssetTypeResponse
     */
    public function getAssetType(GetAssetTypeRequest $args)
    {
        $result = parent::getAssetType($args->toArray());
        return new GetAssetTypeResponse($result->toArray());
    }
}
