<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelDataBindingUsages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 */
class AssetBindingValueFilter extends Shape
{
    /**
     * @param array{assetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
