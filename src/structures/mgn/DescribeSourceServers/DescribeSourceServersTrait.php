<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers;

trait DescribeSourceServersTrait
{
    /**
     * @param DescribeSourceServersRequest $args
     * @return DescribeSourceServersResponse
     */
    public function describeSourceServers(DescribeSourceServersRequest $args)
    {
        $result = parent::describeSourceServers($args->toArray());
        return new DescribeSourceServersResponse($result->toArray());
    }
}
