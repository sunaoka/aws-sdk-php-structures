<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionTargets;

trait ListSubscriptionTargetsTrait
{
    /**
     * @param ListSubscriptionTargetsRequest $args
     * @return ListSubscriptionTargetsResponse
     */
    public function listSubscriptionTargets(ListSubscriptionTargetsRequest $args)
    {
        $result = parent::listSubscriptionTargets($args->toArray());
        return new ListSubscriptionTargetsResponse($result->toArray());
    }
}
