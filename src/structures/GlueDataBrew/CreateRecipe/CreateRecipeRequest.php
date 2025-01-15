<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $Name
 * @property list<Shapes\RecipeStep> $Steps
 * @property array<string, string>|null $Tags
 */
class CreateRecipeRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Name: string,
     *     Steps: list<Shapes\RecipeStep>,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
