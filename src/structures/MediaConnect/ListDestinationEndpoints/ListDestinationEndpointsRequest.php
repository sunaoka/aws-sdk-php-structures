<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListDestinationEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\DestinationEndpointFilter>|null $Filters
 */
class ListDestinationEndpointsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\DestinationEndpointFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
