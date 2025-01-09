<?php

namespace Sunaoka\Aws\Structures\Personalize\ListRecipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SERVICE' $recipeProvider
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND' $domain
 */
class ListRecipesRequest extends Request
{
    /**
     * @param array{
     *     recipeProvider?: 'SERVICE',
     *     nextToken?: string,
     *     maxResults?: int,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
