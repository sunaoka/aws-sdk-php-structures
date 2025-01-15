<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageRecipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace'|null $owner
 * @property list<Shapes\Filter>|null $filters
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListImageRecipesRequest extends Request
{
    /**
     * @param array{
     *     owner?: 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace'|null,
     *     filters?: list<Shapes\Filter>|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
