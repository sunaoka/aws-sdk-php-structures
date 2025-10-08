<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDeliveryDestinationPolicy;

trait DeleteDeliveryDestinationPolicyTrait
{
    /**
     * @param DeleteDeliveryDestinationPolicyRequest $args
     * @return void
     */
    public function deleteDeliveryDestinationPolicy(DeleteDeliveryDestinationPolicyRequest $args)
    {
        parent::deleteDeliveryDestinationPolicy($args->toArray());
    }
}
