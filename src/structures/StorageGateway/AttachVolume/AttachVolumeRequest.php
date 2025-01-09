<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AttachVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $TargetName
 * @property string $VolumeARN
 * @property string $NetworkInterfaceId
 * @property string $DiskId
 */
class AttachVolumeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TargetName?: string,
     *     VolumeARN: string,
     *     NetworkInterfaceId: string,
     *     DiskId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
