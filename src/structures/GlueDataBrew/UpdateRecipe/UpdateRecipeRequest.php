<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $Name
 * @property list<Shapes\RecipeStep>|null $Steps
 */
class UpdateRecipeRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Name: string,
     *     Steps?: list<Shapes\RecipeStep>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
