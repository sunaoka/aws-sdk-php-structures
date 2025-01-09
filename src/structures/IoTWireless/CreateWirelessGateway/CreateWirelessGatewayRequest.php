<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\LoRaWANGateway $LoRaWAN
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientRequestToken
 */
class CreateWirelessGatewayRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     LoRaWAN: Shapes\LoRaWANGateway,
     *     Tags?: list<Shapes\Tag>,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
