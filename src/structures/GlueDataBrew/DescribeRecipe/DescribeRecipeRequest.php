<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $RecipeVersion
 */
class DescribeRecipeRequest extends Request
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
