<?php

namespace Sunaoka\Aws\Structures\Kinesis\RegisterStreamConsumer;

trait RegisterStreamConsumerTrait
{
    /**
     * @param RegisterStreamConsumerRequest $args
     * @return RegisterStreamConsumerResponse
     */
    public function registerStreamConsumer(RegisterStreamConsumerRequest $args)
    {
        $result = parent::registerStreamConsumer($args->toArray());
        return new RegisterStreamConsumerResponse($result->toArray());
    }
}
