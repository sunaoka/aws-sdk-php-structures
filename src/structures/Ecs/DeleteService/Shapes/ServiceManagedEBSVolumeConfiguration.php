<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $encrypted
 * @property string|null $kmsKeyId
 * @property string|null $volumeType
 * @property int|null $sizeInGiB
 * @property string|null $snapshotId
 * @property int|null $volumeInitializationRate
 * @property int|null $iops
 * @property int|null $throughput
 * @property list<EBSTagSpecification>|null $tagSpecifications
 * @property string $roleArn
 * @property 'ext3'|'ext4'|'xfs'|'ntfs'|null $filesystemType
 */
class ServiceManagedEBSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     encrypted?: bool|null,
     *     kmsKeyId?: string|null,
     *     volumeType?: string|null,
     *     sizeInGiB?: int|null,
     *     snapshotId?: string|null,
     *     volumeInitializationRate?: int|null,
     *     iops?: int|null,
     *     throughput?: int|null,
     *     tagSpecifications?: list<EBSTagSpecification>|null,
     *     roleArn: string,
     *     filesystemType?: 'ext3'|'ext4'|'xfs'|'ntfs'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
