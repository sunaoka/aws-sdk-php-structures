<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeInboundCrossClusterSearchConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property int<min, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeInboundCrossClusterSearchConnectionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<min, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
