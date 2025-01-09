<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     jobId?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
