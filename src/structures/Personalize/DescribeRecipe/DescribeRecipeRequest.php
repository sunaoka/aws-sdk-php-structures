<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recipeArn
 */
class DescribeRecipeRequest extends Request
{
    /**
     * @param array{recipeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
