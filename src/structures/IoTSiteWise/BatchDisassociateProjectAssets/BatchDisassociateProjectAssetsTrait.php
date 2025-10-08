<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchDisassociateProjectAssets;

trait BatchDisassociateProjectAssetsTrait
{
    /**
     * @param BatchDisassociateProjectAssetsRequest $args
     * @return BatchDisassociateProjectAssetsResponse
     */
    public function batchDisassociateProjectAssets(BatchDisassociateProjectAssetsRequest $args)
    {
        $result = parent::batchDisassociateProjectAssets($args->toArray());
        return new BatchDisassociateProjectAssetsResponse($result->toArray());
    }
}
