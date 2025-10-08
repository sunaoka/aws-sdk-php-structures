<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeBundleTasks;

trait DescribeBundleTasksTrait
{
    /**
     * @param DescribeBundleTasksRequest $args
     * @return DescribeBundleTasksResponse
     */
    public function describeBundleTasks(DescribeBundleTasksRequest $args)
    {
        $result = parent::describeBundleTasks($args->toArray());
        return new DescribeBundleTasksResponse($result->toArray());
    }
}
