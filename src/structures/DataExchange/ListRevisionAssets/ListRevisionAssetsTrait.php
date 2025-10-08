<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets;

trait ListRevisionAssetsTrait
{
    /**
     * @param ListRevisionAssetsRequest $args
     * @return ListRevisionAssetsResponse
     */
    public function listRevisionAssets(ListRevisionAssetsRequest $args)
    {
        $result = parent::listRevisionAssets($args->toArray());
        return new ListRevisionAssetsResponse($result->toArray());
    }
}
