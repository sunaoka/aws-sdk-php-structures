<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListRasterDataCollections;

trait ListRasterDataCollectionsTrait
{
    /**
     * @param ListRasterDataCollectionsRequest $args
     * @return ListRasterDataCollectionsResponse
     */
    public function listRasterDataCollections(ListRasterDataCollectionsRequest $args)
    {
        $result = parent::listRasterDataCollections($args->toArray());
        return new ListRasterDataCollectionsResponse($result->toArray());
    }
}
