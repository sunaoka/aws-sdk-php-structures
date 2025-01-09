<?php

namespace Sunaoka\Aws\Structures\Outposts\StartConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceSerialNumber
 * @property string $AssetId
 * @property string $ClientPublicKey
 * @property int $NetworkInterfaceDeviceIndex
 */
class StartConnectionRequest extends Request
{
    /**
     * @param array{
     *     DeviceSerialNumber?: string,
     *     AssetId: string,
     *     ClientPublicKey: string,
     *     NetworkInterfaceDeviceIndex: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
