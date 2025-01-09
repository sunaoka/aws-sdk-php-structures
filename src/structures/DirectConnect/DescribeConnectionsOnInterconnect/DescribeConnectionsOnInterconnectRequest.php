<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeConnectionsOnInterconnect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $interconnectId
 */
class DescribeConnectionsOnInterconnectRequest extends Request
{
    /**
     * @param array{interconnectId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
