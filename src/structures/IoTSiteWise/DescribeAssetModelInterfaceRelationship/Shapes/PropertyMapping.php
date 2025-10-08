<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelInterfaceRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetModelPropertyId
 * @property string $interfaceAssetModelPropertyId
 */
class PropertyMapping extends Shape
{
    /**
     * @param array{
     *     assetModelPropertyId: string,
     *     interfaceAssetModelPropertyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
