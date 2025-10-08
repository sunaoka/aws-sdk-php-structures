<?php

namespace Sunaoka\Aws\Structures\Shield\EnableProactiveEngagement;

trait EnableProactiveEngagementTrait
{
    /**
     * @param EnableProactiveEngagementRequest $args
     * @return EnableProactiveEngagementResponse
     */
    public function enableProactiveEngagement(EnableProactiveEngagementRequest $args)
    {
        $result = parent::enableProactiveEngagement($args->toArray());
        return new EnableProactiveEngagementResponse($result->toArray());
    }
}
