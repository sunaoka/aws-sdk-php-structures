<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetType;

trait CreateAssetTypeTrait
{
    /**
     * @param CreateAssetTypeRequest $args
     * @return CreateAssetTypeResponse
     */
    public function createAssetType(CreateAssetTypeRequest $args)
    {
        $result = parent::createAssetType($args->toArray());
        return new CreateAssetTypeResponse($result->toArray());
    }
}
