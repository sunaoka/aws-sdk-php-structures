<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxWindows;

trait DescribeLocationFsxWindowsTrait
{
    /**
     * @param DescribeLocationFsxWindowsRequest $args
     * @return DescribeLocationFsxWindowsResponse
     */
    public function describeLocationFsxWindows(DescribeLocationFsxWindowsRequest $args)
    {
        $result = parent::describeLocationFsxWindows($args->toArray());
        return new DescribeLocationFsxWindowsResponse($result->toArray());
    }
}
