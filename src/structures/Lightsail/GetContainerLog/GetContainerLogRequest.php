<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerLog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property string $containerName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $filterPattern
 * @property string $pageToken
 */
class GetContainerLogRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     containerName: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     filterPattern?: string,
     *     pageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
