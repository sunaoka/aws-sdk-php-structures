<?php

namespace Sunaoka\Aws\Structures\Artifact\GetReportMetadata;

trait GetReportMetadataTrait
{
    /**
     * @param GetReportMetadataRequest $args
     * @return GetReportMetadataResponse
     */
    public function getReportMetadata(GetReportMetadataRequest $args)
    {
        $result = parent::getReportMetadata($args->toArray());
        return new GetReportMetadataResponse($result->toArray());
    }
}
