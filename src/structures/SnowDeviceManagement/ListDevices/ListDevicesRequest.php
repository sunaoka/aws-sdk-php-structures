<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $jobId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
