<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerLog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property string $containerName
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $filterPattern
 * @property string|null $pageToken
 */
class GetContainerLogRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     containerName: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     filterPattern?: string|null,
     *     pageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
