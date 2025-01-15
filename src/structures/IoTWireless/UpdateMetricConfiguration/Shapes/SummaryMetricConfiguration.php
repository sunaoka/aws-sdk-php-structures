<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMetricConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $Status
 */
class SummaryMetricConfiguration extends Shape
{
    /**
     * @param array{Status?: 'Enabled'|'Disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
