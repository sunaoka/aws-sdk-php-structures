<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gateway
 */
class DescribeGatewayRequest extends Request
{
    /**
     * @param array{gateway: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
