<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSubnets;

trait SetSubnetsTrait
{
    /**
     * @param SetSubnetsRequest $args
     * @return SetSubnetsResponse
     */
    public function setSubnets(SetSubnetsRequest $args)
    {
        $result = parent::setSubnets($args->toArray());
        return new SetSubnetsResponse($result->toArray());
    }
}
