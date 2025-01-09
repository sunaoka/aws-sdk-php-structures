<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     jobId?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
