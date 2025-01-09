<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartAt
 * @property Duration $Duration
 * @property string $CronExpressionForRecurrence
 */
class AutoTuneMaintenanceSchedule extends Shape
{
    /**
     * @param array{
     *     StartAt?: \Aws\Api\DateTimeResult,
     *     Duration?: Duration,
     *     CronExpressionForRecurrence?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
