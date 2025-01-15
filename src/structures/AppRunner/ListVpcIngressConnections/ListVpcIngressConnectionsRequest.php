<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcIngressConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListVpcIngressConnectionsFilter|null $Filter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListVpcIngressConnectionsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ListVpcIngressConnectionsFilter|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
