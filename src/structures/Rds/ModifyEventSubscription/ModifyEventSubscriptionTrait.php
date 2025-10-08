<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyEventSubscription;

trait ModifyEventSubscriptionTrait
{
    /**
     * @param ModifyEventSubscriptionRequest $args
     * @return ModifyEventSubscriptionResponse
     */
    public function modifyEventSubscription(ModifyEventSubscriptionRequest $args)
    {
        $result = parent::modifyEventSubscription($args->toArray());
        return new ModifyEventSubscriptionResponse($result->toArray());
    }
}
