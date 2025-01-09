<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProviderNetId
 * @property string $Id
 * @property double $Rssi
 * @property double $Snr
 * @property string $RfRegion
 * @property bool $DlAllowed
 */
class LoRaWANPublicGatewayMetadata extends Shape
{
    /**
     * @param array{
     *     ProviderNetId?: string,
     *     Id?: string,
     *     Rssi?: double,
     *     Snr?: double,
     *     RfRegion?: string,
     *     DlAllowed?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
