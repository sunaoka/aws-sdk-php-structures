<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DescribePrivateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $privateConnectionName
 */
class DescribePrivateConnectionRequest extends Request
{
    /**
     * @param array{privateConnectionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
