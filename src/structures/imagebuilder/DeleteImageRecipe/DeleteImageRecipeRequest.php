<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteImageRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageRecipeArn
 */
class DeleteImageRecipeRequest extends Request
{
    /**
     * @param array{imageRecipeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
