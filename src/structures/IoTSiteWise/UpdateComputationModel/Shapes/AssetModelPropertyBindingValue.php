<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateComputationModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetModelId
 * @property string $propertyId
 */
class AssetModelPropertyBindingValue extends Shape
{
    /**
     * @param array{
     *     assetModelId: string,
     *     propertyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
