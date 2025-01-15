<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $ClientRequestToken
 * @property Shapes\LoRaWANMulticast $LoRaWAN
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMulticastGroupRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     ClientRequestToken?: string|null,
     *     LoRaWAN: Shapes\LoRaWANMulticast,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
