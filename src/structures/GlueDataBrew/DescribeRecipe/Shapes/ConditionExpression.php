<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Condition
 * @property string $Value
 * @property string $TargetColumn
 */
class ConditionExpression extends Shape
{
    /**
     * @param array{
     *     Condition: string,
     *     Value?: string,
     *     TargetColumn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
