<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannelStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ConfigExportDeliveryInfo $configSnapshotDeliveryInfo
 * @property ConfigExportDeliveryInfo $configHistoryDeliveryInfo
 * @property ConfigStreamDeliveryInfo $configStreamDeliveryInfo
 */
class DeliveryChannelStatus extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     configSnapshotDeliveryInfo?: ConfigExportDeliveryInfo,
     *     configHistoryDeliveryInfo?: ConfigExportDeliveryInfo,
     *     configStreamDeliveryInfo?: ConfigStreamDeliveryInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
