<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeQuickConnect;

trait DescribeQuickConnectTrait
{
    /**
     * @param DescribeQuickConnectRequest $args
     * @return DescribeQuickConnectResponse
     */
    public function describeQuickConnect(DescribeQuickConnectRequest $args)
    {
        $result = parent::describeQuickConnect($args->toArray());
        return new DescribeQuickConnectResponse($result->toArray());
    }
}
