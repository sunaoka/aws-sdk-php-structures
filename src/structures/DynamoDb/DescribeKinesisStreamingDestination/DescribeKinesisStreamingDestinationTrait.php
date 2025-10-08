<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeKinesisStreamingDestination;

trait DescribeKinesisStreamingDestinationTrait
{
    /**
     * @param DescribeKinesisStreamingDestinationRequest $args
     * @return DescribeKinesisStreamingDestinationResponse
     */
    public function describeKinesisStreamingDestination(DescribeKinesisStreamingDestinationRequest $args)
    {
        $result = parent::describeKinesisStreamingDestination($args->toArray());
        return new DescribeKinesisStreamingDestinationResponse($result->toArray());
    }
}
