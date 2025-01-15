<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $propertyId
 * @property string|null $hierarchyId
 * @property list<AssetModelPropertyPathSegment>|null $propertyPath
 */
class VariableValue extends Shape
{
    /**
     * @param array{
     *     propertyId?: string|null,
     *     hierarchyId?: string|null,
     *     propertyPath?: list<AssetModelPropertyPathSegment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
