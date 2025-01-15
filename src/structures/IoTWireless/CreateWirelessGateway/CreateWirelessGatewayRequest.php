<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\LoRaWANGateway $LoRaWAN
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientRequestToken
 */
class CreateWirelessGatewayRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     LoRaWAN: Shapes\LoRaWANGateway,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
