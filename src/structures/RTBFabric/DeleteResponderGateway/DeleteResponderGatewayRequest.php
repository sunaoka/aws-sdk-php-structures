<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteResponderGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 */
class DeleteResponderGatewayRequest extends Request
{
    /**
     * @param array{gatewayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
