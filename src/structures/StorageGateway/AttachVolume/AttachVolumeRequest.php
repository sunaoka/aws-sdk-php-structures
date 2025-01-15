<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AttachVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string|null $TargetName
 * @property string $VolumeARN
 * @property string $NetworkInterfaceId
 * @property string|null $DiskId
 */
class AttachVolumeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TargetName?: string|null,
     *     VolumeARN: string,
     *     NetworkInterfaceId: string,
     *     DiskId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
