<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\SearchResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResourceQuery $ResourceQuery
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class SearchResourcesRequest extends Request
{
    /**
     * @param array{
     *     ResourceQuery: Shapes\ResourceQuery,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
