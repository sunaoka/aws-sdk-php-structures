<?php

namespace Sunaoka\Aws\Structures\MQ\ListBrokers;

trait ListBrokersTrait
{
    /**
     * @param ListBrokersRequest $args
     * @return ListBrokersResponse
     */
    public function listBrokers(ListBrokersRequest $args)
    {
        $result = parent::listBrokers($args->toArray());
        return new ListBrokersResponse($result->toArray());
    }
}
