<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteRequesterGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 */
class DeleteRequesterGatewayRequest extends Request
{
    /**
     * @param array{gatewayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
