<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListProjectAssets;

trait ListProjectAssetsTrait
{
    /**
     * @param ListProjectAssetsRequest $args
     * @return ListProjectAssetsResponse
     */
    public function listProjectAssets(ListProjectAssetsRequest $args)
    {
        $result = parent::listProjectAssets($args->toArray());
        return new ListProjectAssetsResponse($result->toArray());
    }
}
