<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoggingConfigurationStatus $status
 * @property string $workspace
 * @property string $logGroupArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class LoggingConfigurationMetadata extends Shape
{
    /**
     * @param array{
     *     status: LoggingConfigurationStatus,
     *     workspace: string,
     *     logGroupArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
