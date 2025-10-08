<?php

namespace Sunaoka\Aws\Structures\Firehose\ListDeliveryStreams;

trait ListDeliveryStreamsTrait
{
    /**
     * @param ListDeliveryStreamsRequest $args
     * @return ListDeliveryStreamsResponse
     */
    public function listDeliveryStreams(ListDeliveryStreamsRequest $args)
    {
        $result = parent::listDeliveryStreams($args->toArray());
        return new ListDeliveryStreamsResponse($result->toArray());
    }
}
