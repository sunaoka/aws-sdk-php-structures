<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeServers;

trait DescribeServersTrait
{
    /**
     * @param DescribeServersRequest $args
     * @return DescribeServersResponse
     */
    public function describeServers(DescribeServersRequest $args)
    {
        $result = parent::describeServers($args->toArray());
        return new DescribeServersResponse($result->toArray());
    }
}
