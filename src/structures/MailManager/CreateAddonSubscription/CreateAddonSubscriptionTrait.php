<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddonSubscription;

trait CreateAddonSubscriptionTrait
{
    /**
     * @param CreateAddonSubscriptionRequest $args
     * @return CreateAddonSubscriptionResponse
     */
    public function createAddonSubscription(CreateAddonSubscriptionRequest $args)
    {
        $result = parent::createAddonSubscription($args->toArray());
        return new CreateAddonSubscriptionResponse($result->toArray());
    }
}
