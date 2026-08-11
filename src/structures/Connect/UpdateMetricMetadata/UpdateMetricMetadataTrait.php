<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateMetricMetadata;

trait UpdateMetricMetadataTrait
{
    /**
     * @param UpdateMetricMetadataRequest $args
     * @return UpdateMetricMetadataResponse
     */
    public function updateMetricMetadata(UpdateMetricMetadataRequest $args)
    {
        $result = parent::updateMetricMetadata($args->toArray());
        return new UpdateMetricMetadataResponse($result->toArray());
    }
}
