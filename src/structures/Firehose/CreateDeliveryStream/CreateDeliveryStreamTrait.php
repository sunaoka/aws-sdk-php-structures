<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream;

trait CreateDeliveryStreamTrait
{
    /**
     * @param CreateDeliveryStreamRequest $args
     * @return CreateDeliveryStreamResponse
     */
    public function createDeliveryStream(CreateDeliveryStreamRequest $args)
    {
        $result = parent::createDeliveryStream($args->toArray());
        return new CreateDeliveryStreamResponse($result->toArray());
    }
}
