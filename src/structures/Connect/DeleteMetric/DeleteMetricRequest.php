<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $MetricId
 */
class DeleteMetricRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MetricId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
