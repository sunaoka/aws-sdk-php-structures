<?php

namespace Sunaoka\Aws\Structures\Artifact\ExportComplianceInquiry;

trait ExportComplianceInquiryTrait
{
    /**
     * @param ExportComplianceInquiryRequest $args
     * @return ExportComplianceInquiryResponse
     */
    public function exportComplianceInquiry(ExportComplianceInquiryRequest $args)
    {
        $result = parent::exportComplianceInquiry($args->toArray());
        return new ExportComplianceInquiryResponse($result->toArray());
    }
}
