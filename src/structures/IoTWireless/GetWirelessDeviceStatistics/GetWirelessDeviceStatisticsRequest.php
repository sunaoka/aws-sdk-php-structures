<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WirelessDeviceId
 */
class GetWirelessDeviceStatisticsRequest extends Request
{
    /**
     * @param array{WirelessDeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
