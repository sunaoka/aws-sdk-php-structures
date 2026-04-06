<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DescribePrivateConnection;

trait DescribePrivateConnectionTrait
{
    /**
     * @param DescribePrivateConnectionRequest $args
     * @return DescribePrivateConnectionResponse
     */
    public function describePrivateConnection(DescribePrivateConnectionRequest $args)
    {
        $result = parent::describePrivateConnection($args->toArray());
        return new DescribePrivateConnectionResponse($result->toArray());
    }
}
