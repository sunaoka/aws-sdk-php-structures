<?php

namespace Sunaoka\Aws\Structures\SSMContacts\StopEngagement;

trait StopEngagementTrait
{
    /**
     * @param StopEngagementRequest $args
     * @return StopEngagementResponse
     */
    public function stopEngagement(StopEngagementRequest $args)
    {
        $result = parent::stopEngagement($args->toArray());
        return new StopEngagementResponse($result->toArray());
    }
}
