<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeGroups;

trait DescribeGroupsTrait
{
    /**
     * @param DescribeGroupsRequest $args
     * @return DescribeGroupsResponse
     */
    public function describeGroups(DescribeGroupsRequest $args)
    {
        $result = parent::describeGroups($args->toArray());
        return new DescribeGroupsResponse($result->toArray());
    }
}
