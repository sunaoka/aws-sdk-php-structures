<?php

namespace Sunaoka\Aws\Structures\Kafka\GetCompatibleKafkaVersions;

trait GetCompatibleKafkaVersionsTrait
{
    /**
     * @param GetCompatibleKafkaVersionsRequest $args
     * @return GetCompatibleKafkaVersionsResponse
     */
    public function getCompatibleKafkaVersions(GetCompatibleKafkaVersionsRequest $args)
    {
        $result = parent::getCompatibleKafkaVersions($args->toArray());
        return new GetCompatibleKafkaVersionsResponse($result->toArray());
    }
}
