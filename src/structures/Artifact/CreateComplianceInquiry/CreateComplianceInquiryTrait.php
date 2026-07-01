<?php

namespace Sunaoka\Aws\Structures\Artifact\CreateComplianceInquiry;

trait CreateComplianceInquiryTrait
{
    /**
     * @param CreateComplianceInquiryRequest $args
     * @return CreateComplianceInquiryResponse
     */
    public function createComplianceInquiry(CreateComplianceInquiryRequest $args)
    {
        $result = parent::createComplianceInquiry($args->toArray());
        return new CreateComplianceInquiryResponse($result->toArray());
    }
}
