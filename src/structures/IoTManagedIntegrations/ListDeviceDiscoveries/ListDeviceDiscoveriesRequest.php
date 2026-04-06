<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListDeviceDiscoveries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property 'ZWAVE'|'ZIGBEE'|'CLOUD'|'CUSTOM'|'CONTROLLER_CAPABILITY_REDISCOVERY'|null $TypeFilter
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|null $StatusFilter
 */
class ListDeviceDiscoveriesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     TypeFilter?: 'ZWAVE'|'ZIGBEE'|'CLOUD'|'CUSTOM'|'CONTROLLER_CAPABILITY_REDISCOVERY'|null,
     *     StatusFilter?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
