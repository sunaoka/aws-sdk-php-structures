<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeConnectionsOnInterconnect;

trait DescribeConnectionsOnInterconnectTrait
{
    /**
     * @param DescribeConnectionsOnInterconnectRequest $args
     * @return DescribeConnectionsOnInterconnectResponse
     */
    public function describeConnectionsOnInterconnect(DescribeConnectionsOnInterconnectRequest $args)
    {
        $result = parent::describeConnectionsOnInterconnect($args->toArray());
        return new DescribeConnectionsOnInterconnectResponse($result->toArray());
    }
}
