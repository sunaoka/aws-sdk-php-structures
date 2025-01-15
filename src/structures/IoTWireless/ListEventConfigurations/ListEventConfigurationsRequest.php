<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'FuotaTask'|'SidewalkAccount'|'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property int<0, 250>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEventConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: 'FuotaTask'|'SidewalkAccount'|'WirelessDevice'|'WirelessGateway',
     *     MaxResults?: int<0, 250>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
