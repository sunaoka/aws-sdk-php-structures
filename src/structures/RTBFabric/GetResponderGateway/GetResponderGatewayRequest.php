<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetResponderGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 */
class GetResponderGatewayRequest extends Request
{
    /**
     * @param array{gatewayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
