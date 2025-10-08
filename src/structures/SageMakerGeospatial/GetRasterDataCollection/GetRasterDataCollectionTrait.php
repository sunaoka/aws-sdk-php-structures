<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetRasterDataCollection;

trait GetRasterDataCollectionTrait
{
    /**
     * @param GetRasterDataCollectionRequest $args
     * @return GetRasterDataCollectionResponse
     */
    public function getRasterDataCollection(GetRasterDataCollectionRequest $args)
    {
        $result = parent::getRasterDataCollection($args->toArray());
        return new GetRasterDataCollectionResponse($result->toArray());
    }
}
