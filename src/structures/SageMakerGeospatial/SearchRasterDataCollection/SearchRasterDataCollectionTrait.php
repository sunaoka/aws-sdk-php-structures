<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection;

trait SearchRasterDataCollectionTrait
{
    /**
     * @param SearchRasterDataCollectionRequest $args
     * @return SearchRasterDataCollectionResponse
     */
    public function searchRasterDataCollection(SearchRasterDataCollectionRequest $args)
    {
        $result = parent::searchRasterDataCollection($args->toArray());
        return new SearchRasterDataCollectionResponse($result->toArray());
    }
}
