<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetContainerRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $containerRecipeArn
 */
class GetContainerRecipeRequest extends Request
{
    /**
     * @param array{containerRecipeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
