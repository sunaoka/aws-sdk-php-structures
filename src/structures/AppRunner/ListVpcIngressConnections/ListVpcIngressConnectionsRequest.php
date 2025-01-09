<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcIngressConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListVpcIngressConnectionsFilter $Filter
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListVpcIngressConnectionsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ListVpcIngressConnectionsFilter,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
