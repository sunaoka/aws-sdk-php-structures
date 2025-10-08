<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\AssociateAssets;

trait AssociateAssetsTrait
{
    /**
     * @param AssociateAssetsRequest $args
     * @return void
     */
    public function associateAssets(AssociateAssetsRequest $args)
    {
        parent::associateAssets($args->toArray());
    }
}
