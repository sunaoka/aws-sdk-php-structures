<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DeleteRecipeVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RecipeVersion
 */
class DeleteRecipeVersionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RecipeVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
