<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenderRecipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<10, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRecommenderRecipesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<10, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
