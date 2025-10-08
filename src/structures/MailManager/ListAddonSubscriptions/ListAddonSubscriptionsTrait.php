<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddonSubscriptions;

trait ListAddonSubscriptionsTrait
{
    /**
     * @param ListAddonSubscriptionsRequest $args
     * @return ListAddonSubscriptionsResponse
     */
    public function listAddonSubscriptions(ListAddonSubscriptionsRequest $args)
    {
        $result = parent::listAddonSubscriptions($args->toArray());
        return new ListAddonSubscriptionsResponse($result->toArray());
    }
}
