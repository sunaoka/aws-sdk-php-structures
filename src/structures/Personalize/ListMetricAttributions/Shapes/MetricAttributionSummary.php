<?php

namespace Sunaoka\Aws\Structures\Personalize\ListMetricAttributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $metricAttributionArn
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 */
class MetricAttributionSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     metricAttributionArn?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
