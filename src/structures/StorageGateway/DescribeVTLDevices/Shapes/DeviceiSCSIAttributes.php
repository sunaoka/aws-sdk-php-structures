<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeVTLDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetARN
 * @property string|null $NetworkInterfaceId
 * @property int|null $NetworkInterfacePort
 * @property bool|null $ChapEnabled
 */
class DeviceiSCSIAttributes extends Shape
{
    /**
     * @param array{
     *     TargetARN?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     NetworkInterfacePort?: int|null,
     *     ChapEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
