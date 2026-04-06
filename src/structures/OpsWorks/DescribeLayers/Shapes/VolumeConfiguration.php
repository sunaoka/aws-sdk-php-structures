<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MountPoint
 * @property int|null $RaidLevel
 * @property int $NumberOfDisks
 * @property int $Size
 * @property string|null $VolumeType
 * @property int|null $Iops
 * @property bool|null $Encrypted
 */
class VolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     MountPoint: string,
     *     RaidLevel?: int|null,
     *     NumberOfDisks: int,
     *     Size: int,
     *     VolumeType?: string|null,
     *     Iops?: int|null,
     *     Encrypted?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
