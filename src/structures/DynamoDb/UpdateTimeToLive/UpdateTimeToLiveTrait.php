<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTimeToLive;

trait UpdateTimeToLiveTrait
{
    /**
     * @param UpdateTimeToLiveRequest $args
     * @return UpdateTimeToLiveResponse
     */
    public function updateTimeToLive(UpdateTimeToLiveRequest $args)
    {
        $result = parent::updateTimeToLive($args->toArray());
        return new UpdateTimeToLiveResponse($result->toArray());
    }
}
