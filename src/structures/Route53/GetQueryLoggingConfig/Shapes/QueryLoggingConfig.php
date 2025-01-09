<?php

namespace Sunaoka\Aws\Structures\Route53\GetQueryLoggingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $HostedZoneId
 * @property string $CloudWatchLogsLogGroupArn
 */
class QueryLoggingConfig extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     HostedZoneId: string,
     *     CloudWatchLogsLogGroupArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
