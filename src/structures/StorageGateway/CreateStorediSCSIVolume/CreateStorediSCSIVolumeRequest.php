<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateStorediSCSIVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $DiskId
 * @property string $SnapshotId
 * @property bool $PreserveExistingData
 * @property string $TargetName
 * @property string $NetworkInterfaceId
 * @property bool $KMSEncrypted
 * @property string $KMSKey
 * @property list<Shapes\Tag> $Tags
 */
class CreateStorediSCSIVolumeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     DiskId: string,
     *     SnapshotId?: string,
     *     PreserveExistingData: bool,
     *     TargetName: string,
     *     NetworkInterfaceId: string,
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
