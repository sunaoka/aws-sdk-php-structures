<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeGatewayInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayInstanceArn
 */
class DescribeGatewayInstanceRequest extends Request
{
    /**
     * @param array{GatewayInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
