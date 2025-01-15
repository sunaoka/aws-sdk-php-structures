<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $RecipeVersion
 */
class RecipeReference extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     RecipeVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
