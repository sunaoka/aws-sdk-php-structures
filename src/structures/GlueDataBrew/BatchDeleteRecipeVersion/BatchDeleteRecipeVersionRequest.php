<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\BatchDeleteRecipeVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string> $RecipeVersions
 */
class BatchDeleteRecipeVersionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RecipeVersions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
