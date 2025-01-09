<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'FuotaTask'|'SidewalkAccount'|'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListEventConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: 'FuotaTask'|'SidewalkAccount'|'WirelessDevice'|'WirelessGateway',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
