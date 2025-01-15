<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCachediSCSIVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetARN
 * @property string|null $NetworkInterfaceId
 * @property int|null $NetworkInterfacePort
 * @property int<1, max>|null $LunNumber
 * @property bool|null $ChapEnabled
 */
class VolumeiSCSIAttributes extends Shape
{
    /**
     * @param array{
     *     TargetARN?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     NetworkInterfacePort?: int|null,
     *     LunNumber?: int<1, max>|null,
     *     ChapEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
