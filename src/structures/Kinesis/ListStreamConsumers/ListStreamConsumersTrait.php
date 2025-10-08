<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListStreamConsumers;

trait ListStreamConsumersTrait
{
    /**
     * @param ListStreamConsumersRequest $args
     * @return ListStreamConsumersResponse
     */
    public function listStreamConsumers(ListStreamConsumersRequest $args)
    {
        $result = parent::listStreamConsumers($args->toArray());
        return new ListStreamConsumersResponse($result->toArray());
    }
}
