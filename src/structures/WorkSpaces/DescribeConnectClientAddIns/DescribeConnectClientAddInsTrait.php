<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectClientAddIns;

trait DescribeConnectClientAddInsTrait
{
    /**
     * @param DescribeConnectClientAddInsRequest $args
     * @return DescribeConnectClientAddInsResponse
     */
    public function describeConnectClientAddIns(DescribeConnectClientAddInsRequest $args)
    {
        $result = parent::describeConnectClientAddIns($args->toArray());
        return new DescribeConnectClientAddInsResponse($result->toArray());
    }
}
