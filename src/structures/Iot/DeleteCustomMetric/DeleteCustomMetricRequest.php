<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCustomMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 */
class DeleteCustomMetricRequest extends Request
{
    /**
     * @param array{metricName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
