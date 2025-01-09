<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property VariableValue $value
 */
class ExpressionVariable extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value: VariableValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
