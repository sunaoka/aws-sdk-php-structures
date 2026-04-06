<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateKinesisStreamingDestination;

trait UpdateKinesisStreamingDestinationTrait
{
    /**
     * @param UpdateKinesisStreamingDestinationRequest $args
     * @return UpdateKinesisStreamingDestinationResponse
     */
    public function updateKinesisStreamingDestination(UpdateKinesisStreamingDestinationRequest $args)
    {
        $result = parent::updateKinesisStreamingDestination($args->toArray());
        return new UpdateKinesisStreamingDestinationResponse($result->toArray());
    }
}
