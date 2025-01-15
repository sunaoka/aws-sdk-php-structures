<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteFleetMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 * @property int|null $expectedVersion
 */
class DeleteFleetMetricRequest extends Request
{
    /**
     * @param array{
     *     metricName: string,
     *     expectedVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
