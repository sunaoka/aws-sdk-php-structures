<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeArn
 * @property string|null $VolumeType
 * @property string|null $DeviceName
 * @property int|null $VolumeSizeInGB
 * @property string|null $EncryptionType
 * @property string|null $SnapshotArn
 * @property string|null $KmsKeyArn
 */
class VolumeDetail extends Shape
{
    /**
     * @param array{
     *     VolumeArn?: string|null,
     *     VolumeType?: string|null,
     *     DeviceName?: string|null,
     *     VolumeSizeInGB?: int|null,
     *     EncryptionType?: string|null,
     *     SnapshotArn?: string|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
