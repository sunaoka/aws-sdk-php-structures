<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProviderNetId
 * @property string|null $Id
 * @property double|null $Rssi
 * @property double|null $Snr
 * @property string|null $RfRegion
 * @property bool|null $DlAllowed
 */
class LoRaWANPublicGatewayMetadata extends Shape
{
    /**
     * @param array{
     *     ProviderNetId?: string|null,
     *     Id?: string|null,
     *     Rssi?: double|null,
     *     Snr?: double|null,
     *     RfRegion?: string|null,
     *     DlAllowed?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
