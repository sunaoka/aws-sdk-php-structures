<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteSubscriptionTarget;

trait DeleteSubscriptionTargetTrait
{
    /**
     * @param DeleteSubscriptionTargetRequest $args
     * @return void
     */
    public function deleteSubscriptionTarget(DeleteSubscriptionTargetRequest $args)
    {
        parent::deleteSubscriptionTarget($args->toArray());
    }
}
