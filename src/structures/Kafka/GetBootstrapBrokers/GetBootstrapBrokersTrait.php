<?php

namespace Sunaoka\Aws\Structures\Kafka\GetBootstrapBrokers;

trait GetBootstrapBrokersTrait
{
    /**
     * @param GetBootstrapBrokersRequest $args
     * @return GetBootstrapBrokersResponse
     */
    public function getBootstrapBrokers(GetBootstrapBrokersRequest $args)
    {
        $result = parent::getBootstrapBrokers($args->toArray());
        return new GetBootstrapBrokersResponse($result->toArray());
    }
}
