<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchAssociateProjectAssets;

trait BatchAssociateProjectAssetsTrait
{
    /**
     * @param BatchAssociateProjectAssetsRequest $args
     * @return BatchAssociateProjectAssetsResponse
     */
    public function batchAssociateProjectAssets(BatchAssociateProjectAssetsRequest $args)
    {
        $result = parent::batchAssociateProjectAssets($args->toArray());
        return new BatchAssociateProjectAssetsResponse($result->toArray());
    }
}
