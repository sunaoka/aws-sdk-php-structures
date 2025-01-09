<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property Shapes\LoRaWANMulticast $LoRaWAN
 */
class UpdateMulticastGroupRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     Description?: string,
     *     LoRaWAN?: Shapes\LoRaWANMulticast
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
