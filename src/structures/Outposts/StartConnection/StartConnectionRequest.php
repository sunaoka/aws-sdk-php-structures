<?php

namespace Sunaoka\Aws\Structures\Outposts\StartConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeviceSerialNumber
 * @property string $AssetId
 * @property string $ClientPublicKey
 * @property int<0, 1> $NetworkInterfaceDeviceIndex
 */
class StartConnectionRequest extends Request
{
    /**
     * @param array{
     *     DeviceSerialNumber?: string|null,
     *     AssetId: string,
     *     ClientPublicKey: string,
     *     NetworkInterfaceDeviceIndex: int<0, 1>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
