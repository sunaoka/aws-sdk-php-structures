<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $RecipeVersion
 */
class RecipeReference extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     RecipeVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
