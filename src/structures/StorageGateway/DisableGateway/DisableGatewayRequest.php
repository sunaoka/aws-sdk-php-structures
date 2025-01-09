<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DisableGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class DisableGatewayRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
