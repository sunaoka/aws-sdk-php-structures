<?php

namespace Sunaoka\Aws\Structures\Inspector\GetTelemetryMetadata;

trait GetTelemetryMetadataTrait
{
    /**
     * @param GetTelemetryMetadataRequest $args
     * @return GetTelemetryMetadataResponse
     */
    public function getTelemetryMetadata(GetTelemetryMetadataRequest $args)
    {
        $result = parent::getTelemetryMetadata($args->toArray());
        return new GetTelemetryMetadataResponse($result->toArray());
    }
}
