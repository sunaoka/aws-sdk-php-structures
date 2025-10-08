<?php

namespace Sunaoka\Aws\Structures\Shield\AssociateProactiveEngagementDetails;

trait AssociateProactiveEngagementDetailsTrait
{
    /**
     * @param AssociateProactiveEngagementDetailsRequest $args
     * @return AssociateProactiveEngagementDetailsResponse
     */
    public function associateProactiveEngagementDetails(AssociateProactiveEngagementDetailsRequest $args)
    {
        $result = parent::associateProactiveEngagementDetails($args->toArray());
        return new AssociateProactiveEngagementDetailsResponse($result->toArray());
    }
}
