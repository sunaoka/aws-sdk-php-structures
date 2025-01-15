<?php

namespace Sunaoka\Aws\Structures\Amplify\GenerateAccessLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string $domainName
 * @property string $appId
 */
class GenerateAccessLogsRequest extends Request
{
    /**
     * @param array{
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     domainName: string,
     *     appId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
