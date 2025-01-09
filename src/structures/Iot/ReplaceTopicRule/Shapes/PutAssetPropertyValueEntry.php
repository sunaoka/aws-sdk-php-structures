<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 * @property list<AssetPropertyValue> $propertyValues
 */
class PutAssetPropertyValueEntry extends Shape
{
    /**
     * @param array{
     *     entryId?: string,
     *     assetId?: string,
     *     propertyId?: string,
     *     propertyAlias?: string,
     *     propertyValues: list<AssetPropertyValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
