<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterByAssetModel|null $filterByAssetModel
 * @property FilterByAsset|null $filterByAsset
 */
class IotSiteWiseSourceConfigurationFilter extends Shape
{
    /**
     * @param array{
     *     filterByAssetModel?: FilterByAssetModel|null,
     *     filterByAsset?: FilterByAsset|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
