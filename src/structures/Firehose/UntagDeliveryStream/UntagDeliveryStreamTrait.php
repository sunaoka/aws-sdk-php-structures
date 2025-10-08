<?php

namespace Sunaoka\Aws\Structures\Firehose\UntagDeliveryStream;

trait UntagDeliveryStreamTrait
{
    /**
     * @param UntagDeliveryStreamRequest $args
     * @return UntagDeliveryStreamResponse
     */
    public function untagDeliveryStream(UntagDeliveryStreamRequest $args)
    {
        $result = parent::untagDeliveryStream($args->toArray());
        return new UntagDeliveryStreamResponse($result->toArray());
    }
}
