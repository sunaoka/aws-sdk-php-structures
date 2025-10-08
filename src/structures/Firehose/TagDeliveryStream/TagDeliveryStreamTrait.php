<?php

namespace Sunaoka\Aws\Structures\Firehose\TagDeliveryStream;

trait TagDeliveryStreamTrait
{
    /**
     * @param TagDeliveryStreamRequest $args
     * @return TagDeliveryStreamResponse
     */
    public function tagDeliveryStream(TagDeliveryStreamRequest $args)
    {
        $result = parent::tagDeliveryStream($args->toArray());
        return new TagDeliveryStreamResponse($result->toArray());
    }
}
