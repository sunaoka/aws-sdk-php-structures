<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 */
class DescribeGatewayRequest extends Request
{
    /**
     * @param array{GatewayArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
