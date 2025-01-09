<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeArn
 * @property string $VolumeType
 * @property string $DeviceName
 * @property int $VolumeSizeInGB
 * @property string $EncryptionType
 * @property string $SnapshotArn
 * @property string $KmsKeyArn
 */
class VolumeDetail extends Shape
{
    /**
     * @param array{
     *     VolumeArn?: string,
     *     VolumeType?: string,
     *     DeviceName?: string,
     *     VolumeSizeInGB?: int,
     *     EncryptionType?: string,
     *     SnapshotArn?: string,
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
