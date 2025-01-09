<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPositionConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListPositionConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ResourceType?: 'WirelessDevice'|'WirelessGateway',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
