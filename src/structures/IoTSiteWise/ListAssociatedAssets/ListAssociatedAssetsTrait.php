<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssociatedAssets;

trait ListAssociatedAssetsTrait
{
    /**
     * @param ListAssociatedAssetsRequest $args
     * @return ListAssociatedAssetsResponse
     */
    public function listAssociatedAssets(ListAssociatedAssetsRequest $args)
    {
        $result = parent::listAssociatedAssets($args->toArray());
        return new ListAssociatedAssetsResponse($result->toArray());
    }
}
