<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ShutdownGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class ShutdownGatewayRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
