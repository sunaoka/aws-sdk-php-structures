<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListQueuedMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $NextToken
 * @property int<0, 250>|null $MaxResults
 * @property 'Sidewalk'|'LoRaWAN'|null $WirelessDeviceType
 */
class ListQueuedMessagesRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 250>|null,
     *     WirelessDeviceType?: 'Sidewalk'|'LoRaWAN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
