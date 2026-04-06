<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeWorkspace;

trait DescribeWorkspaceTrait
{
    /**
     * @param DescribeWorkspaceRequest $args
     * @return DescribeWorkspaceResponse
     */
    public function describeWorkspace(DescribeWorkspaceRequest $args)
    {
        $result = parent::describeWorkspace($args->toArray());
        return new DescribeWorkspaceResponse($result->toArray());
    }
}
