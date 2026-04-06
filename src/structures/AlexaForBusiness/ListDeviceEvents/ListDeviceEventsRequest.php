<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListDeviceEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceArn
 * @property 'CONNECTION_STATUS'|'DEVICE_STATUS'|null $EventType
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListDeviceEventsRequest extends Request
{
    /**
     * @param array{
     *     DeviceArn: string,
     *     EventType?: 'CONNECTION_STATUS'|'DEVICE_STATUS'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
