<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateStorediSCSIVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $DiskId
 * @property string|null $SnapshotId
 * @property bool $PreserveExistingData
 * @property string $TargetName
 * @property string $NetworkInterfaceId
 * @property bool|null $KMSEncrypted
 * @property string|null $KMSKey
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateStorediSCSIVolumeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     DiskId: string,
     *     SnapshotId?: string|null,
     *     PreserveExistingData: bool,
     *     TargetName: string,
     *     NetworkInterfaceId: string,
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
