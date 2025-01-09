<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecipeArn
 * @property string $RecipeVersion
 */
class RecipeReference extends Shape
{
    /**
     * @param array{
     *     RecipeArn: string,
     *     RecipeVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
