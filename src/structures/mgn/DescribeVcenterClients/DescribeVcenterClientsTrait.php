<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeVcenterClients;

trait DescribeVcenterClientsTrait
{
    /**
     * @param DescribeVcenterClientsRequest $args
     * @return DescribeVcenterClientsResponse
     */
    public function describeVcenterClients(DescribeVcenterClientsRequest $args)
    {
        $result = parent::describeVcenterClients($args->toArray());
        return new DescribeVcenterClientsResponse($result->toArray());
    }
}
