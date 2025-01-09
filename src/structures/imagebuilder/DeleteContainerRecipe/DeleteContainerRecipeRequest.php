<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteContainerRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $containerRecipeArn
 */
class DeleteContainerRecipeRequest extends Request
{
    /**
     * @param array{containerRecipeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
