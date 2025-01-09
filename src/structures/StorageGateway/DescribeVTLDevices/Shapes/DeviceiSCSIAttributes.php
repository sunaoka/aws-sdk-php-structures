<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeVTLDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetARN
 * @property string $NetworkInterfaceId
 * @property int $NetworkInterfacePort
 * @property bool $ChapEnabled
 */
class DeviceiSCSIAttributes extends Shape
{
    /**
     * @param array{
     *     TargetARN?: string,
     *     NetworkInterfaceId?: string,
     *     NetworkInterfacePort?: int,
     *     ChapEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
