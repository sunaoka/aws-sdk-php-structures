<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateQueryLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogDestination $cloudWatchLogs
 * @property LoggingFilter $filters
 */
class LoggingDestination extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs: CloudWatchLogDestination,
     *     filters: LoggingFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
