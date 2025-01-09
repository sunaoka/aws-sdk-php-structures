<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevicesJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListDevicesJobsRequest extends Request
{
    /**
     * @param array{
     *     DeviceId?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
