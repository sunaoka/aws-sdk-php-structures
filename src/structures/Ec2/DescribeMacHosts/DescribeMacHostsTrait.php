<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMacHosts;

trait DescribeMacHostsTrait
{
    /**
     * @param DescribeMacHostsRequest $args
     * @return DescribeMacHostsResponse
     */
    public function describeMacHosts(DescribeMacHostsRequest $args)
    {
        $result = parent::describeMacHosts($args->toArray());
        return new DescribeMacHostsResponse($result->toArray());
    }
}
