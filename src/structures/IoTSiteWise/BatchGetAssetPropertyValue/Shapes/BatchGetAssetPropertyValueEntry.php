<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $propertyAlias
 */
class BatchGetAssetPropertyValueEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     propertyAlias?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
