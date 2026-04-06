<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $connectionId
 */
class DescribeConnectionsRequest extends Request
{
    /**
     * @param array{connectionId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
