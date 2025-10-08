<?php

namespace Sunaoka\Aws\Structures\IVS\BatchGetChannel;

trait BatchGetChannelTrait
{
    /**
     * @param BatchGetChannelRequest $args
     * @return BatchGetChannelResponse
     */
    public function batchGetChannel(BatchGetChannelRequest $args)
    {
        $result = parent::batchGetChannel($args->toArray());
        return new BatchGetChannelResponse($result->toArray());
    }
}
