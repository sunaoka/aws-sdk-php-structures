<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 */
class BatchGetAssetPropertyValueEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     assetId?: string,
     *     propertyId?: string,
     *     propertyAlias?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
