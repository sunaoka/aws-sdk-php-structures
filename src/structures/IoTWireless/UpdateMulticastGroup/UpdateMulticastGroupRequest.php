<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\LoRaWANMulticast|null $LoRaWAN
 */
class UpdateMulticastGroupRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     LoRaWAN?: Shapes\LoRaWANMulticast|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
