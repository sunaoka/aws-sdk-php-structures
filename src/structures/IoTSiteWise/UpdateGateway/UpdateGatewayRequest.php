<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $gatewayName
 */
class UpdateGatewayRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     gatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
