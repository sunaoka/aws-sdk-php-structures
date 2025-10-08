<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceBundles;

trait DescribeWorkspaceBundlesTrait
{
    /**
     * @param DescribeWorkspaceBundlesRequest $args
     * @return DescribeWorkspaceBundlesResponse
     */
    public function describeWorkspaceBundles(DescribeWorkspaceBundlesRequest $args)
    {
        $result = parent::describeWorkspaceBundles($args->toArray());
        return new DescribeWorkspaceBundlesResponse($result->toArray());
    }
}
