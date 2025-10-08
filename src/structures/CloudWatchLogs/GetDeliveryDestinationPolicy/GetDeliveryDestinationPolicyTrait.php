<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliveryDestinationPolicy;

trait GetDeliveryDestinationPolicyTrait
{
    /**
     * @param GetDeliveryDestinationPolicyRequest $args
     * @return GetDeliveryDestinationPolicyResponse
     */
    public function getDeliveryDestinationPolicy(GetDeliveryDestinationPolicyRequest $args)
    {
        $result = parent::getDeliveryDestinationPolicy($args->toArray());
        return new GetDeliveryDestinationPolicyResponse($result->toArray());
    }
}
