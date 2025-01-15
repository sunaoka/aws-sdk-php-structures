<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartAt
 * @property Duration|null $Duration
 * @property string|null $CronExpressionForRecurrence
 */
class AutoTuneMaintenanceSchedule extends Shape
{
    /**
     * @param array{
     *     StartAt?: \Aws\Api\DateTimeResult|null,
     *     Duration?: Duration|null,
     *     CronExpressionForRecurrence?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
