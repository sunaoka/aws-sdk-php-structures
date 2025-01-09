<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecipeAction $Action
 * @property list<ConditionExpression> $ConditionExpressions
 */
class RecipeStep extends Shape
{
    /**
     * @param array{
     *     Action: RecipeAction,
     *     ConditionExpressions?: list<ConditionExpression>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
