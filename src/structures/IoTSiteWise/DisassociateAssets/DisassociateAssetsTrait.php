<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DisassociateAssets;

trait DisassociateAssetsTrait
{
    /**
     * @param DisassociateAssetsRequest $args
     * @return void
     */
    public function disassociateAssets(DisassociateAssetsRequest $args)
    {
        parent::disassociateAssets($args->toArray());
    }
}
