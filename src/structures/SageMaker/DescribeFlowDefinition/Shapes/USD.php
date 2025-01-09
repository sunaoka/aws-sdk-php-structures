<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2> $Dollars
 * @property int<0, 99> $Cents
 * @property int<0, 9> $TenthFractionsOfACent
 */
class USD extends Shape
{
    /**
     * @param array{
     *     Dollars?: int<0, 2>,
     *     Cents?: int<0, 99>,
     *     TenthFractionsOfACent?: int<0, 9>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
