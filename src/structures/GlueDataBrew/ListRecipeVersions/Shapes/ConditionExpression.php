<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRecipeVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Condition
 * @property string|null $Value
 * @property string $TargetColumn
 */
class ConditionExpression extends Shape
{
    /**
     * @param array{
     *     Condition: string,
     *     Value?: string|null,
     *     TargetColumn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
