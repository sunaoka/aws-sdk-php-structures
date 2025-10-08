<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssets;

trait ListAssetsTrait
{
    /**
     * @param ListAssetsRequest $args
     * @return ListAssetsResponse
     */
    public function listAssets(ListAssetsRequest $args)
    {
        $result = parent::listAssets($args->toArray());
        return new ListAssetsResponse($result->toArray());
    }
}
