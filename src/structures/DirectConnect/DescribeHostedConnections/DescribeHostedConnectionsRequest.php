<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeHostedConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 */
class DescribeHostedConnectionsRequest extends Request
{
    /**
     * @param array{connectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
