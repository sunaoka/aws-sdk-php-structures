<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListRegisteredSubscriptionProviders;

trait ListRegisteredSubscriptionProvidersTrait
{
    /**
     * @param ListRegisteredSubscriptionProvidersRequest $args
     * @return ListRegisteredSubscriptionProvidersResponse
     */
    public function listRegisteredSubscriptionProviders(ListRegisteredSubscriptionProvidersRequest $args)
    {
        $result = parent::listRegisteredSubscriptionProviders($args->toArray());
        return new ListRegisteredSubscriptionProvidersResponse($result->toArray());
    }
}
