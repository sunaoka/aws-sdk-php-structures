<?php

namespace Sunaoka\Aws\Structures\Shield\DisableProactiveEngagement;

trait DisableProactiveEngagementTrait
{
    /**
     * @param DisableProactiveEngagementRequest $args
     * @return DisableProactiveEngagementResponse
     */
    public function disableProactiveEngagement(DisableProactiveEngagementRequest $args)
    {
        $result = parent::disableProactiveEngagement($args->toArray());
        return new DisableProactiveEngagementResponse($result->toArray());
    }
}
