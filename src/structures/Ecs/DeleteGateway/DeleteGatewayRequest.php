<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gateway
 */
class DeleteGatewayRequest extends Request
{
    /**
     * @param array{gateway: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
