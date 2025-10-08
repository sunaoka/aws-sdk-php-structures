<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessmentReportUrl;

trait GetAssessmentReportUrlTrait
{
    /**
     * @param GetAssessmentReportUrlRequest $args
     * @return GetAssessmentReportUrlResponse
     */
    public function getAssessmentReportUrl(GetAssessmentReportUrlRequest $args)
    {
        $result = parent::getAssessmentReportUrl($args->toArray());
        return new GetAssessmentReportUrlResponse($result->toArray());
    }
}
