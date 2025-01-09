<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 */
class DeleteGatewayRequest extends Request
{
    /**
     * @param array{gatewayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
