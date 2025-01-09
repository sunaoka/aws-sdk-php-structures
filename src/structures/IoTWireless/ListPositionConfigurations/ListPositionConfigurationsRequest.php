<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPositionConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property int<0, 250> $MaxResults
 * @property string $NextToken
 */
class ListPositionConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ResourceType?: 'WirelessDevice'|'WirelessGateway',
     *     MaxResults?: int<0, 250>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
