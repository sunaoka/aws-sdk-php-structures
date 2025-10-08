<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeVpcIngressConnection;

trait DescribeVpcIngressConnectionTrait
{
    /**
     * @param DescribeVpcIngressConnectionRequest $args
     * @return DescribeVpcIngressConnectionResponse
     */
    public function describeVpcIngressConnection(DescribeVpcIngressConnectionRequest $args)
    {
        $result = parent::describeVpcIngressConnection($args->toArray());
        return new DescribeVpcIngressConnectionResponse($result->toArray());
    }
}
