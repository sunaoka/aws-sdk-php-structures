<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\AssociateTimeSeriesToAssetProperty;

trait AssociateTimeSeriesToAssetPropertyTrait
{
    /**
     * @param AssociateTimeSeriesToAssetPropertyRequest $args
     * @return void
     */
    public function associateTimeSeriesToAssetProperty(AssociateTimeSeriesToAssetPropertyRequest $args)
    {
        parent::associateTimeSeriesToAssetProperty($args->toArray());
    }
}
