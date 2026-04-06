<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelDataBindingUsages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetModelPropertyBindingValue|null $assetModelProperty
 * @property AssetPropertyBindingValue|null $assetProperty
 */
class DataBindingValue extends Shape
{
    /**
     * @param array{
     *     assetModelProperty?: AssetModelPropertyBindingValue|null,
     *     assetProperty?: AssetPropertyBindingValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
