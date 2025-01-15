<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevicesJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeviceId
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDevicesJobsRequest extends Request
{
    /**
     * @param array{
     *     DeviceId?: string|null,
     *     MaxResults?: int<0, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
