<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 */
class DescribeConnectionsRequest extends Request
{
    /**
     * @param array{connectionId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
