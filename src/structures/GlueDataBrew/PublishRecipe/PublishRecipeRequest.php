<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\PublishRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $Name
 */
class PublishRecipeRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
