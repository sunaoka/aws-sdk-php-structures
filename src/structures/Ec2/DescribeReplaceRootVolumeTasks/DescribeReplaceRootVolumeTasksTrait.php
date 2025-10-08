<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReplaceRootVolumeTasks;

trait DescribeReplaceRootVolumeTasksTrait
{
    /**
     * @param DescribeReplaceRootVolumeTasksRequest $args
     * @return DescribeReplaceRootVolumeTasksResponse
     */
    public function describeReplaceRootVolumeTasks(DescribeReplaceRootVolumeTasksRequest $args)
    {
        $result = parent::describeReplaceRootVolumeTasks($args->toArray());
        return new DescribeReplaceRootVolumeTasksResponse($result->toArray());
    }
}
