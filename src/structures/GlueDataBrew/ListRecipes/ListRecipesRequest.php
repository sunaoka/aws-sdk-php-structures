<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRecipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $RecipeVersion
 */
class ListRecipesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     RecipeVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
