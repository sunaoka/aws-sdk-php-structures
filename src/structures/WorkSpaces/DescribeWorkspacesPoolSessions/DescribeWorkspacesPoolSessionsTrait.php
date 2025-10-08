<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPoolSessions;

trait DescribeWorkspacesPoolSessionsTrait
{
    /**
     * @param DescribeWorkspacesPoolSessionsRequest $args
     * @return DescribeWorkspacesPoolSessionsResponse
     */
    public function describeWorkspacesPoolSessions(DescribeWorkspacesPoolSessionsRequest $args)
    {
        $result = parent::describeWorkspacesPoolSessions($args->toArray());
        return new DescribeWorkspacesPoolSessionsResponse($result->toArray());
    }
}
