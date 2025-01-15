<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateCachediSCSIVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int $VolumeSizeInBytes
 * @property string|null $SnapshotId
 * @property string $TargetName
 * @property string|null $SourceVolumeARN
 * @property string $NetworkInterfaceId
 * @property string $ClientToken
 * @property bool|null $KMSEncrypted
 * @property string|null $KMSKey
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCachediSCSIVolumeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     VolumeSizeInBytes: int,
     *     SnapshotId?: string|null,
     *     TargetName: string,
     *     SourceVolumeARN?: string|null,
     *     NetworkInterfaceId: string,
     *     ClientToken: string,
     *     KMSEncrypted?: bool|null,
     *     KMSKey?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
