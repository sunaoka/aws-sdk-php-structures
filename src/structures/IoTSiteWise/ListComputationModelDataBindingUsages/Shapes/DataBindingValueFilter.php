<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelDataBindingUsages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetBindingValueFilter|null $asset
 * @property AssetModelBindingValueFilter|null $assetModel
 * @property AssetPropertyBindingValueFilter|null $assetProperty
 * @property AssetModelPropertyBindingValueFilter|null $assetModelProperty
 */
class DataBindingValueFilter extends Shape
{
    /**
     * @param array{
     *     asset?: AssetBindingValueFilter|null,
     *     assetModel?: AssetModelBindingValueFilter|null,
     *     assetProperty?: AssetPropertyBindingValueFilter|null,
     *     assetModelProperty?: AssetModelPropertyBindingValueFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
