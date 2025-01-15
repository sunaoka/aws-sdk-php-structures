<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInboundConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeInboundConnectionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
