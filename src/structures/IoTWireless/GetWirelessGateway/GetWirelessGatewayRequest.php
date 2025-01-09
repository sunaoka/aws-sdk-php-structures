<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'GatewayEui'|'WirelessGatewayId'|'ThingName' $IdentifierType
 */
class GetWirelessGatewayRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     IdentifierType: 'GatewayEui'|'WirelessGatewayId'|'ThingName'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
