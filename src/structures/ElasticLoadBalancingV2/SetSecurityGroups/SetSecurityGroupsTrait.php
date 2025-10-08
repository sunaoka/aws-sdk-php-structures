<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSecurityGroups;

trait SetSecurityGroupsTrait
{
    /**
     * @param SetSecurityGroupsRequest $args
     * @return SetSecurityGroupsResponse
     */
    public function setSecurityGroups(SetSecurityGroupsRequest $args)
    {
        $result = parent::setSecurityGroups($args->toArray());
        return new SetSecurityGroupsResponse($result->toArray());
    }
}
