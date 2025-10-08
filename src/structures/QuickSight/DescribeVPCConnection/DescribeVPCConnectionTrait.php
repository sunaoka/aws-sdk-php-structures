<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeVPCConnection;

trait DescribeVPCConnectionTrait
{
    /**
     * @param DescribeVPCConnectionRequest $args
     * @return DescribeVPCConnectionResponse
     */
    public function describeVPCConnection(DescribeVPCConnectionRequest $args)
    {
        $result = parent::describeVPCConnection($args->toArray());
        return new DescribeVPCConnectionResponse($result->toArray());
    }
}
