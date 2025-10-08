<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeregisterStreamConsumer;

trait DeregisterStreamConsumerTrait
{
    /**
     * @param DeregisterStreamConsumerRequest $args
     * @return void
     */
    public function deregisterStreamConsumer(DeregisterStreamConsumerRequest $args)
    {
        parent::deregisterStreamConsumer($args->toArray());
    }
}
