<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPositionConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'WirelessDevice'|'WirelessGateway'|null $ResourceType
 * @property int<0, 250>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPositionConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ResourceType?: 'WirelessDevice'|'WirelessGateway'|null,
     *     MaxResults?: int<0, 250>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
