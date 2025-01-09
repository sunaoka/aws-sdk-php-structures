<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int $TransmitMode
 * @property string $PayloadData
 * @property Shapes\WirelessMetadata $WirelessMetadata
 */
class SendDataToWirelessDeviceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     TransmitMode: int,
     *     PayloadData: string,
     *     WirelessMetadata?: Shapes\WirelessMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
