<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMetricConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SummaryMetricConfiguration|null $SummaryMetric
 */
class UpdateMetricConfigurationRequest extends Request
{
    /**
     * @param array{SummaryMetric?: Shapes\SummaryMetricConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
