<?php

namespace Sunaoka\Aws\Structures\StorageGateway\StartGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class StartGatewayRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
