<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetProperty;

trait UpdateAssetPropertyTrait
{
    /**
     * @param UpdateAssetPropertyRequest $args
     * @return void
     */
    public function updateAssetProperty(UpdateAssetPropertyRequest $args)
    {
        parent::updateAssetProperty($args->toArray());
    }
}
