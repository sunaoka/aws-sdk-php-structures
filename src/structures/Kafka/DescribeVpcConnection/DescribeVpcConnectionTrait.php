<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeVpcConnection;

trait DescribeVpcConnectionTrait
{
    /**
     * @param DescribeVpcConnectionRequest $args
     * @return DescribeVpcConnectionResponse
     */
    public function describeVpcConnection(DescribeVpcConnectionRequest $args)
    {
        $result = parent::describeVpcConnection($args->toArray());
        return new DescribeVpcConnectionResponse($result->toArray());
    }
}
