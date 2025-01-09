<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterByAssetModel $filterByAssetModel
 * @property FilterByAsset $filterByAsset
 */
class IotSiteWiseSourceConfigurationFilter extends Shape
{
    /**
     * @param array{
     *     filterByAssetModel?: FilterByAssetModel,
     *     filterByAsset?: FilterByAsset
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
