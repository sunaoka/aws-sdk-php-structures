<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateComputationModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetModelPropertyBindingValue|null $assetModelProperty
 * @property AssetPropertyBindingValue|null $assetProperty
 * @property list<ComputationModelDataBindingValue>|null $list
 */
class ComputationModelDataBindingValue extends Shape
{
    /**
     * @param array{
     *     assetModelProperty?: AssetModelPropertyBindingValue|null,
     *     assetProperty?: AssetPropertyBindingValue|null,
     *     list?: list<ComputationModelDataBindingValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
