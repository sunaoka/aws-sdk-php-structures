<?php

namespace Sunaoka\Aws\Structures\Glue\SearchAssets;

trait SearchAssetsTrait
{
    /**
     * @param SearchAssetsRequest $args
     * @return SearchAssetsResponse
     */
    public function searchAssets(SearchAssetsRequest $args)
    {
        $result = parent::searchAssets($args->toArray());
        return new SearchAssetsResponse($result->toArray());
    }
}
