<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeSlackWorkspaces;

trait DescribeSlackWorkspacesTrait
{
    /**
     * @param DescribeSlackWorkspacesRequest $args
     * @return DescribeSlackWorkspacesResponse
     */
    public function describeSlackWorkspaces(DescribeSlackWorkspacesRequest $args)
    {
        $result = parent::describeSlackWorkspaces($args->toArray());
        return new DescribeSlackWorkspacesResponse($result->toArray());
    }
}
