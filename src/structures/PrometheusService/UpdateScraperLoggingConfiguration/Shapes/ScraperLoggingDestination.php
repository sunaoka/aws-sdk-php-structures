<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraperLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogDestination|null $cloudWatchLogs
 */
class ScraperLoggingDestination extends Shape
{
    /**
     * @param array{cloudWatchLogs?: CloudWatchLogDestination|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
