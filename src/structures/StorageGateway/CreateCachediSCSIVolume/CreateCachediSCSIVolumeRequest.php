<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateCachediSCSIVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int $VolumeSizeInBytes
 * @property string $SnapshotId
 * @property string $TargetName
 * @property string $SourceVolumeARN
 * @property string $NetworkInterfaceId
 * @property string $ClientToken
 * @property bool $KMSEncrypted
 * @property string $KMSKey
 * @property list<Shapes\Tag> $Tags
 */
class CreateCachediSCSIVolumeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     VolumeSizeInBytes: int,
     *     SnapshotId?: string,
     *     TargetName: string,
     *     SourceVolumeARN?: string,
     *     NetworkInterfaceId: string,
     *     ClientToken: string,
     *     KMSEncrypted?: bool,
     *     KMSKey?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
