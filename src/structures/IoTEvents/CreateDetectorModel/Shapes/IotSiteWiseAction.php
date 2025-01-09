<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 * @property AssetPropertyValue $propertyValue
 */
class IotSiteWiseAction extends Shape
{
    /**
     * @param array{
     *     entryId?: string,
     *     assetId?: string,
     *     propertyId?: string,
     *     propertyAlias?: string,
     *     propertyValue?: AssetPropertyValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
