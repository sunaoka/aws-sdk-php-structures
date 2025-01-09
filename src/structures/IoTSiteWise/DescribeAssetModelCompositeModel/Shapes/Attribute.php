<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultValue
 */
class Attribute extends Shape
{
    /**
     * @param array{defaultValue?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
