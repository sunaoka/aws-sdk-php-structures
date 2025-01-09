<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $logGroupArn
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property LoggingConfigurationStatus $status
 * @property string $workspace
 */
class LoggingConfigurationMetadata extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     logGroupArn: string,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     status: LoggingConfigurationStatus,
     *     workspace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
