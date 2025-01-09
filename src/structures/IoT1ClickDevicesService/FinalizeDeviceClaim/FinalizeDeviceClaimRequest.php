<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\FinalizeDeviceClaim;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 * @property array<string, string> $Tags
 */
class FinalizeDeviceClaimRequest extends Request
{
    /**
     * @param array{
     *     DeviceId: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
