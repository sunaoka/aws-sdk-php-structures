<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListContainerRecipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace' $owner
 * @property list<Shapes\Filter> $filters
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 */
class ListContainerRecipesRequest extends Request
{
    /**
     * @param array{
     *     owner?: 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace',
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int<1, 25>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
