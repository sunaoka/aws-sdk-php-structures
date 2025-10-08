<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyHosts;

trait ModifyHostsTrait
{
    /**
     * @param ModifyHostsRequest $args
     * @return ModifyHostsResponse
     */
    public function modifyHosts(ModifyHostsRequest $args)
    {
        $result = parent::modifyHosts($args->toArray());
        return new ModifyHostsResponse($result->toArray());
    }
}
