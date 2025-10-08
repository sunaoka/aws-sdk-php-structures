<?php

namespace Sunaoka\Aws\Structures\Firehose\DeleteDeliveryStream;

trait DeleteDeliveryStreamTrait
{
    /**
     * @param DeleteDeliveryStreamRequest $args
     * @return DeleteDeliveryStreamResponse
     */
    public function deleteDeliveryStream(DeleteDeliveryStreamRequest $args)
    {
        $result = parent::deleteDeliveryStream($args->toArray());
        return new DeleteDeliveryStreamResponse($result->toArray());
    }
}
