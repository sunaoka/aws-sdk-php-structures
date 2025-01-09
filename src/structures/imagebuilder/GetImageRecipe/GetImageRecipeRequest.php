<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImageRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageRecipeArn
 */
class GetImageRecipeRequest extends Request
{
    /**
     * @param array{imageRecipeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
