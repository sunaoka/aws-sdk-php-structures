<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteAddonSubscription;

trait DeleteAddonSubscriptionTrait
{
    /**
     * @param DeleteAddonSubscriptionRequest $args
     * @return DeleteAddonSubscriptionResponse
     */
    public function deleteAddonSubscription(DeleteAddonSubscriptionRequest $args)
    {
        $result = parent::deleteAddonSubscription($args->toArray());
        return new DeleteAddonSubscriptionResponse($result->toArray());
    }
}
