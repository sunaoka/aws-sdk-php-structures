<?php

namespace Sunaoka\Aws\Structures\Artifact\GetComplianceInquiryMetadata;

trait GetComplianceInquiryMetadataTrait
{
    /**
     * @param GetComplianceInquiryMetadataRequest $args
     * @return GetComplianceInquiryMetadataResponse
     */
    public function getComplianceInquiryMetadata(GetComplianceInquiryMetadataRequest $args)
    {
        $result = parent::getComplianceInquiryMetadata($args->toArray());
        return new GetComplianceInquiryMetadataResponse($result->toArray());
    }
}
