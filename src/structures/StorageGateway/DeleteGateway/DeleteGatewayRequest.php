<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class DeleteGatewayRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
