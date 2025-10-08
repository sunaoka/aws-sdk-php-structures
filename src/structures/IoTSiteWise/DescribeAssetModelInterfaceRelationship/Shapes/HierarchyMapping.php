<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelInterfaceRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetModelHierarchyId
 * @property string $interfaceAssetModelHierarchyId
 */
class HierarchyMapping extends Shape
{
    /**
     * @param array{
     *     assetModelHierarchyId: string,
     *     interfaceAssetModelHierarchyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
