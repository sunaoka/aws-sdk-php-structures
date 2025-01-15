<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $parentAssetId
 * @property string|null $childAssetId
 */
class AssetHierarchyInfo extends Shape
{
    /**
     * @param array{
     *     parentAssetId?: string|null,
     *     childAssetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
