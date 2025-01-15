<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchPutAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $propertyAlias
 * @property list<AssetPropertyValue> $propertyValues
 */
class PutAssetPropertyValueEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     propertyAlias?: string|null,
     *     propertyValues: list<AssetPropertyValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
