<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelDataBindingUsages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $propertyId
 */
class AssetPropertyBindingValueFilter extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     propertyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
