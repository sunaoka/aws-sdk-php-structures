<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcIngressConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListVpcIngressConnectionsFilter $Filter
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListVpcIngressConnectionsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ListVpcIngressConnectionsFilter,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
