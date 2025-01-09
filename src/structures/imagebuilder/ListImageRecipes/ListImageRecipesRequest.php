<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageRecipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace' $owner
 * @property list<Shapes\Filter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListImageRecipesRequest extends Request
{
    /**
     * @param array{
     *     owner?: 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace',
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
