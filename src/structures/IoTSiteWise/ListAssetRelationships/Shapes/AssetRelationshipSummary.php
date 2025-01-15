<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetHierarchyInfo|null $hierarchyInfo
 * @property 'HIERARCHY' $relationshipType
 */
class AssetRelationshipSummary extends Shape
{
    /**
     * @param array{
     *     hierarchyInfo?: AssetHierarchyInfo|null,
     *     relationshipType: 'HIERARCHY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
