<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property RecipeReference|null $RecipeReference
 * @property list<RecipeStep>|null $RecipeSteps
 */
class Recipe extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     RecipeReference?: RecipeReference|null,
     *     RecipeSteps?: list<RecipeStep>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
