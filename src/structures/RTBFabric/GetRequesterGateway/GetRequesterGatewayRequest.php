<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetRequesterGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 */
class GetRequesterGatewayRequest extends Request
{
    /**
     * @param array{gatewayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
