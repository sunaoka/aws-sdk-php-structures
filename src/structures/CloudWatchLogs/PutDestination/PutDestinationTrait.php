<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDestination;

trait PutDestinationTrait
{
    /**
     * @param PutDestinationRequest $args
     * @return PutDestinationResponse
     */
    public function putDestination(PutDestinationRequest $args)
    {
        $result = parent::putDestination($args->toArray());
        return new PutDestinationResponse($result->toArray());
    }
}
