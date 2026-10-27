<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListSourceEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\SourceEndpointFilter>|null $Filters
 */
class ListSourceEndpointsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\SourceEndpointFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
