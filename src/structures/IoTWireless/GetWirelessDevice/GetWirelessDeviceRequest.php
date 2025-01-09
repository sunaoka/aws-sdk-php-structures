<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'WirelessDeviceId'|'DevEui'|'ThingName'|'SidewalkManufacturingSn' $IdentifierType
 */
class GetWirelessDeviceRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     IdentifierType: 'WirelessDeviceId'|'DevEui'|'ThingName'|'SidewalkManufacturingSn'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
