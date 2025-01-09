<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property RecipeReference $RecipeReference
 * @property list<RecipeStep> $RecipeSteps
 */
class Recipe extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     RecipeReference?: RecipeReference,
     *     RecipeSteps?: list<RecipeStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
