<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $propertyId
 * @property string $hierarchyId
 * @property list<AssetModelPropertyPathSegment> $propertyPath
 */
class VariableValue extends Shape
{
    /**
     * @param array{
     *     propertyId?: string,
     *     hierarchyId?: string,
     *     propertyPath?: list<AssetModelPropertyPathSegment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
