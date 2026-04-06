<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeQueryLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryLoggingConfigurationStatus $status
 * @property string $workspace
 * @property list<LoggingDestination> $destinations
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class QueryLoggingConfigurationMetadata extends Shape
{
    /**
     * @param array{
     *     status: QueryLoggingConfigurationStatus,
     *     workspace: string,
     *     destinations: list<LoggingDestination>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
