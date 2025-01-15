<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecipeAction $Action
 * @property list<ConditionExpression>|null $ConditionExpressions
 */
class RecipeStep extends Shape
{
    /**
     * @param array{
     *     Action: RecipeAction,
     *     ConditionExpressions?: list<ConditionExpression>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
