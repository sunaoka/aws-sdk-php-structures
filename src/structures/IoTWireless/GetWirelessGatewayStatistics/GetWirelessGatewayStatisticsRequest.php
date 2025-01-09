<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WirelessGatewayId
 */
class GetWirelessGatewayStatisticsRequest extends Request
{
    /**
     * @param array{WirelessGatewayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
