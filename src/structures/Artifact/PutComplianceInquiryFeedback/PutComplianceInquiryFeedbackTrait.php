<?php

namespace Sunaoka\Aws\Structures\Artifact\PutComplianceInquiryFeedback;

trait PutComplianceInquiryFeedbackTrait
{
    /**
     * @param PutComplianceInquiryFeedbackRequest $args
     * @return PutComplianceInquiryFeedbackResponse
     */
    public function putComplianceInquiryFeedback(PutComplianceInquiryFeedbackRequest $args)
    {
        $result = parent::putComplianceInquiryFeedback($args->toArray());
        return new PutComplianceInquiryFeedbackResponse($result->toArray());
    }
}
