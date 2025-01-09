<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $ClientRequestToken
 * @property Shapes\LoRaWANMulticast $LoRaWAN
 * @property list<Shapes\Tag> $Tags
 */
class CreateMulticastGroupRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     ClientRequestToken?: string,
     *     LoRaWAN: Shapes\LoRaWANMulticast,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
