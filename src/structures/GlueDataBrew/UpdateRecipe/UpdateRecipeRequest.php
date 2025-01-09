<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $Name
 * @property list<Shapes\RecipeStep> $Steps
 */
class UpdateRecipeRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Name: string,
     *     Steps?: list<Shapes\RecipeStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
