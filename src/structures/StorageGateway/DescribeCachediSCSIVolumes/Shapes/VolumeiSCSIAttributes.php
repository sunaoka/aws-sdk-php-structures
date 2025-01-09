<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCachediSCSIVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetARN
 * @property string $NetworkInterfaceId
 * @property int $NetworkInterfacePort
 * @property int<1, max> $LunNumber
 * @property bool $ChapEnabled
 */
class VolumeiSCSIAttributes extends Shape
{
    /**
     * @param array{
     *     TargetARN?: string,
     *     NetworkInterfaceId?: string,
     *     NetworkInterfacePort?: int,
     *     LunNumber?: int<1, max>,
     *     ChapEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
