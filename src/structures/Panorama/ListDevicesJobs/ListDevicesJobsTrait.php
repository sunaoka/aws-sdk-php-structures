<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevicesJobs;

trait ListDevicesJobsTrait
{
    /**
     * @param ListDevicesJobsRequest $args
     * @return ListDevicesJobsResponse
     */
    public function listDevicesJobs(ListDevicesJobsRequest $args)
    {
        $result = parent::listDevicesJobs($args->toArray());
        return new ListDevicesJobsResponse($result->toArray());
    }
}
