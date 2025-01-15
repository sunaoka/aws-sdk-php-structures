<?php

namespace Sunaoka\Aws\Structures\Personalize\ListRecipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SERVICE'|null $recipeProvider
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null $domain
 */
class ListRecipesRequest extends Request
{
    /**
     * @param array{
     *     recipeProvider?: 'SERVICE'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
