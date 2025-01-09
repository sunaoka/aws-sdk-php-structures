<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $encrypted
 * @property string $kmsKeyId
 * @property string $volumeType
 * @property int $sizeInGiB
 * @property string $snapshotId
 * @property int $iops
 * @property int $throughput
 * @property list<EBSTagSpecification> $tagSpecifications
 * @property string $roleArn
 * @property TaskManagedEBSVolumeTerminationPolicy $terminationPolicy
 * @property 'ext3'|'ext4'|'xfs'|'ntfs' $filesystemType
 */
class TaskManagedEBSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     encrypted?: bool,
     *     kmsKeyId?: string,
     *     volumeType?: string,
     *     sizeInGiB?: int,
     *     snapshotId?: string,
     *     iops?: int,
     *     throughput?: int,
     *     tagSpecifications?: list<EBSTagSpecification>,
     *     roleArn: string,
     *     terminationPolicy?: TaskManagedEBSVolumeTerminationPolicy,
     *     filesystemType?: 'ext3'|'ext4'|'xfs'|'ntfs'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
