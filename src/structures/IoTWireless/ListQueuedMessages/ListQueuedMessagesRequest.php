<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListQueuedMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $NextToken
 * @property int<0, 250> $MaxResults
 * @property 'Sidewalk'|'LoRaWAN' $WirelessDeviceType
 */
class ListQueuedMessagesRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 250>,
     *     WirelessDeviceType?: 'Sidewalk'|'LoRaWAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
