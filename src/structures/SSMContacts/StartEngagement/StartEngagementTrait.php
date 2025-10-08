<?php

namespace Sunaoka\Aws\Structures\SSMContacts\StartEngagement;

trait StartEngagementTrait
{
    /**
     * @param StartEngagementRequest $args
     * @return StartEngagementResponse
     */
    public function startEngagement(StartEngagementRequest $args)
    {
        $result = parent::startEngagement($args->toArray());
        return new StartEngagementResponse($result->toArray());
    }
}
