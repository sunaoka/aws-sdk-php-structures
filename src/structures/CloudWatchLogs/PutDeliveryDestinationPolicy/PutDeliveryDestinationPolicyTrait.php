<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDeliveryDestinationPolicy;

trait PutDeliveryDestinationPolicyTrait
{
    /**
     * @param PutDeliveryDestinationPolicyRequest $args
     * @return PutDeliveryDestinationPolicyResponse
     */
    public function putDeliveryDestinationPolicy(PutDeliveryDestinationPolicyRequest $args)
    {
        $result = parent::putDeliveryDestinationPolicy($args->toArray());
        return new PutDeliveryDestinationPolicyResponse($result->toArray());
    }
}
