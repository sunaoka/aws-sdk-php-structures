<?php

namespace Sunaoka\Aws\Structures\Firehose\ListTagsForDeliveryStream;

trait ListTagsForDeliveryStreamTrait
{
    /**
     * @param ListTagsForDeliveryStreamRequest $args
     * @return ListTagsForDeliveryStreamResponse
     */
    public function listTagsForDeliveryStream(ListTagsForDeliveryStreamRequest $args)
    {
        $result = parent::listTagsForDeliveryStream($args->toArray());
        return new ListTagsForDeliveryStreamResponse($result->toArray());
    }
}
