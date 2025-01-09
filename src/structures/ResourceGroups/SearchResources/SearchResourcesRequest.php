<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\SearchResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResourceQuery $ResourceQuery
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class SearchResourcesRequest extends Request
{
    /**
     * @param array{
     *     ResourceQuery: Shapes\ResourceQuery,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
