<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRecipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Operation
 * @property array<string, string> $Parameters
 */
class RecipeAction extends Shape
{
    /**
     * @param array{
     *     Operation: string,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
