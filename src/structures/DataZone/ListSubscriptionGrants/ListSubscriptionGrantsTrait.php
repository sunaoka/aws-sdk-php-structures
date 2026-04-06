<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionGrants;

trait ListSubscriptionGrantsTrait
{
    /**
     * @param ListSubscriptionGrantsRequest $args
     * @return ListSubscriptionGrantsResponse
     */
    public function listSubscriptionGrants(ListSubscriptionGrantsRequest $args)
    {
        $result = parent::listSubscriptionGrants($args->toArray());
        return new ListSubscriptionGrantsResponse($result->toArray());
    }
}
