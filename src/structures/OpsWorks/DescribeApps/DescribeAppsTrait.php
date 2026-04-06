<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeApps;

trait DescribeAppsTrait
{
    /**
     * @param DescribeAppsRequest $args
     * @return DescribeAppsResponse
     */
    public function describeApps(DescribeAppsRequest $args)
    {
        $result = parent::describeApps($args->toArray());
        return new DescribeAppsResponse($result->toArray());
    }
}
