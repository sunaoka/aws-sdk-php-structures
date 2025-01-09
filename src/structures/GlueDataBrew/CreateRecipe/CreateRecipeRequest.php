<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $Name
 * @property list<Shapes\RecipeStep> $Steps
 * @property array<string, string> $Tags
 */
class CreateRecipeRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Name: string,
     *     Steps: list<Shapes\RecipeStep>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
