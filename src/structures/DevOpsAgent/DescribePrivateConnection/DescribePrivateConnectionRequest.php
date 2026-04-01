<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DescribePrivateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DescribePrivateConnectionRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
