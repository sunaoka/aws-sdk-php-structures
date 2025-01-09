<?php

namespace Sunaoka\Aws\Structures\Amplify\GenerateAccessLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $domainName
 * @property string $appId
 */
class GenerateAccessLogsRequest extends Request
{
    /**
     * @param array{
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     domainName: string,
     *     appId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
