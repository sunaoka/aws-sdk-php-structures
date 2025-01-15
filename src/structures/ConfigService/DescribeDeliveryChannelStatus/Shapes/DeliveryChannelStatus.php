<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannelStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property ConfigExportDeliveryInfo|null $configSnapshotDeliveryInfo
 * @property ConfigExportDeliveryInfo|null $configHistoryDeliveryInfo
 * @property ConfigStreamDeliveryInfo|null $configStreamDeliveryInfo
 */
class DeliveryChannelStatus extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     configSnapshotDeliveryInfo?: ConfigExportDeliveryInfo|null,
     *     configHistoryDeliveryInfo?: ConfigExportDeliveryInfo|null,
     *     configStreamDeliveryInfo?: ConfigStreamDeliveryInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
