<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateHosts;

trait AllocateHostsTrait
{
    /**
     * @param AllocateHostsRequest $args
     * @return AllocateHostsResponse
     */
    public function allocateHosts(AllocateHostsRequest $args)
    {
        $result = parent::allocateHosts($args->toArray());
        return new AllocateHostsResponse($result->toArray());
    }
}
