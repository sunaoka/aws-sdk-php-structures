<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelDataBindingUsages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetModelId
 */
class AssetModelBindingValueFilter extends Shape
{
    /**
     * @param array{assetModelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
