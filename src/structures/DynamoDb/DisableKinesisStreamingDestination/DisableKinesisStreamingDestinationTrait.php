<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DisableKinesisStreamingDestination;

trait DisableKinesisStreamingDestinationTrait
{
    /**
     * @param DisableKinesisStreamingDestinationRequest $args
     * @return DisableKinesisStreamingDestinationResponse
     */
    public function disableKinesisStreamingDestination(DisableKinesisStreamingDestinationRequest $args)
    {
        $result = parent::disableKinesisStreamingDestination($args->toArray());
        return new DisableKinesisStreamingDestinationResponse($result->toArray());
    }
}
