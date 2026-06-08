<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssetVersions;

trait ListAssetVersionsTrait
{
    /**
     * @param ListAssetVersionsRequest $args
     * @return ListAssetVersionsResponse
     */
    public function listAssetVersions(ListAssetVersionsRequest $args)
    {
        $result = parent::listAssetVersions($args->toArray());
        return new ListAssetVersionsResponse($result->toArray());
    }
}
