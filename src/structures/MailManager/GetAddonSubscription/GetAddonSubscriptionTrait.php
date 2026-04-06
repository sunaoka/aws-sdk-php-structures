<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddonSubscription;

trait GetAddonSubscriptionTrait
{
    /**
     * @param GetAddonSubscriptionRequest $args
     * @return GetAddonSubscriptionResponse
     */
    public function getAddonSubscription(GetAddonSubscriptionRequest $args)
    {
        $result = parent::getAddonSubscription($args->toArray());
        return new GetAddonSubscriptionResponse($result->toArray());
    }
}
