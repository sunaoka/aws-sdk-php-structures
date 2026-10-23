<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListScheduleActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateOutputStatus|null $updateOutputStatus
 * @property UpdateClippingDataSourceConfiguration|null $updateClippingDataSourceConfiguration
 * @property RemoveClippingDataSourceConfiguration|null $removeClippingDataSourceConfiguration
 */
class ScheduleActionOperation extends Shape
{
    /**
     * @param array{
     *     updateOutputStatus?: UpdateOutputStatus|null,
     *     updateClippingDataSourceConfiguration?: UpdateClippingDataSourceConfiguration|null,
     *     removeClippingDataSourceConfiguration?: RemoveClippingDataSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
