<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\PublishRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $Name
 */
class PublishRecipeRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
