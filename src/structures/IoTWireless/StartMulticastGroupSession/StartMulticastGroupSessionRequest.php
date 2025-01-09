<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartMulticastGroupSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property Shapes\LoRaWANMulticastSession $LoRaWAN
 */
class StartMulticastGroupSessionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     LoRaWAN: Shapes\LoRaWANMulticastSession
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
