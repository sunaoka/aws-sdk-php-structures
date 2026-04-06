<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultValue
 */
class Attribute extends Shape
{
    /**
     * @param array{defaultValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
