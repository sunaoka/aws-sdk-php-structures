<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property Shapes\LoRaWANStartFuotaTask|null $LoRaWAN
 */
class StartFuotaTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     LoRaWAN?: Shapes\LoRaWANStartFuotaTask|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
