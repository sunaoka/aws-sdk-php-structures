<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxy;

trait DescribeProxyTrait
{
    /**
     * @param DescribeProxyRequest $args
     * @return DescribeProxyResponse
     */
    public function describeProxy(DescribeProxyRequest $args)
    {
        $result = parent::describeProxy($args->toArray());
        return new DescribeProxyResponse($result->toArray());
    }
}
