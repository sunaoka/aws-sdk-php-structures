<?php

namespace Sunaoka\Aws\Structures\DynamoDb\EnableKinesisStreamingDestination;

trait EnableKinesisStreamingDestinationTrait
{
    /**
     * @param EnableKinesisStreamingDestinationRequest $args
     * @return EnableKinesisStreamingDestinationResponse
     */
    public function enableKinesisStreamingDestination(EnableKinesisStreamingDestinationRequest $args)
    {
        $result = parent::enableKinesisStreamingDestination($args->toArray());
        return new EnableKinesisStreamingDestinationResponse($result->toArray());
    }
}
