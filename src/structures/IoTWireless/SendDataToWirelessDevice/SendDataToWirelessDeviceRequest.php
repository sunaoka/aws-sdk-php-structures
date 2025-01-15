<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int<0, 1> $TransmitMode
 * @property string $PayloadData
 * @property Shapes\WirelessMetadata|null $WirelessMetadata
 */
class SendDataToWirelessDeviceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     TransmitMode: int<0, 1>,
     *     PayloadData: string,
     *     WirelessMetadata?: Shapes\WirelessMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
