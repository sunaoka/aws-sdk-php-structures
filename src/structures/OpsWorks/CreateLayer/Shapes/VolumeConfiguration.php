<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateLayer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MountPoint
 * @property int $RaidLevel
 * @property int $NumberOfDisks
 * @property int $Size
 * @property string $VolumeType
 * @property int $Iops
 * @property bool $Encrypted
 */
class VolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     MountPoint: string,
     *     RaidLevel?: int,
     *     NumberOfDisks: int,
     *     Size: int,
     *     VolumeType?: string,
     *     Iops?: int,
     *     Encrypted?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
