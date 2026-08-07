<?php

namespace Sunaoka\Aws\Structures\Ec2\BatchModifyIpamRoutingPolicyRegistrations;

trait BatchModifyIpamRoutingPolicyRegistrationsTrait
{
    /**
     * @param BatchModifyIpamRoutingPolicyRegistrationsRequest $args
     * @return BatchModifyIpamRoutingPolicyRegistrationsResponse
     */
    public function batchModifyIpamRoutingPolicyRegistrations(BatchModifyIpamRoutingPolicyRegistrationsRequest $args)
    {
        $result = parent::batchModifyIpamRoutingPolicyRegistrations($args->toArray());
        return new BatchModifyIpamRoutingPolicyRegistrationsResponse($result->toArray());
    }
}
