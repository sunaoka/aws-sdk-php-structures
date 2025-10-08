<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateClusterKafkaVersion;

trait UpdateClusterKafkaVersionTrait
{
    /**
     * @param UpdateClusterKafkaVersionRequest $args
     * @return UpdateClusterKafkaVersionResponse
     */
    public function updateClusterKafkaVersion(UpdateClusterKafkaVersionRequest $args)
    {
        $result = parent::updateClusterKafkaVersion($args->toArray());
        return new UpdateClusterKafkaVersionResponse($result->toArray());
    }
}
