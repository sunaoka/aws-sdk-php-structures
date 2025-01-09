<?php

namespace Sunaoka\Aws\Structures\Route53\CreateQueryLoggingConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string $CloudWatchLogsLogGroupArn
 */
class CreateQueryLoggingConfigRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     CloudWatchLogsLogGroupArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
