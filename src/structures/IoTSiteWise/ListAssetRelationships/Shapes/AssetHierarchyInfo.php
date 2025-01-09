<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $parentAssetId
 * @property string $childAssetId
 */
class AssetHierarchyInfo extends Shape
{
    /**
     * @param array{
     *     parentAssetId?: string,
     *     childAssetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
