<?php

namespace Sunaoka\Aws\Structures\Kafka\ListKafkaVersions;

trait ListKafkaVersionsTrait
{
    /**
     * @param ListKafkaVersionsRequest $args
     * @return ListKafkaVersionsResponse
     */
    public function listKafkaVersions(ListKafkaVersionsRequest $args)
    {
        $result = parent::listKafkaVersions($args->toArray());
        return new ListKafkaVersionsResponse($result->toArray());
    }
}
