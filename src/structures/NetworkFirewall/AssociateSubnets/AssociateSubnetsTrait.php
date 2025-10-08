<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AssociateSubnets;

trait AssociateSubnetsTrait
{
    /**
     * @param AssociateSubnetsRequest $args
     * @return AssociateSubnetsResponse
     */
    public function associateSubnets(AssociateSubnetsRequest $args)
    {
        $result = parent::associateSubnets($args->toArray());
        return new AssociateSubnetsResponse($result->toArray());
    }
}
