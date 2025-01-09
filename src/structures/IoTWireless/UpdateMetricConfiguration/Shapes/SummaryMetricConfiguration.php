<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMetricConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $Status
 */
class SummaryMetricConfiguration extends Shape
{
    /**
     * @param array{Status?: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
