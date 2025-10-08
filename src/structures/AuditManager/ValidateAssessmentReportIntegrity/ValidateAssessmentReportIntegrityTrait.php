<?php

namespace Sunaoka\Aws\Structures\AuditManager\ValidateAssessmentReportIntegrity;

trait ValidateAssessmentReportIntegrityTrait
{
    /**
     * @param ValidateAssessmentReportIntegrityRequest $args
     * @return ValidateAssessmentReportIntegrityResponse
     */
    public function validateAssessmentReportIntegrity(ValidateAssessmentReportIntegrityRequest $args)
    {
        $result = parent::validateAssessmentReportIntegrity($args->toArray());
        return new ValidateAssessmentReportIntegrityResponse($result->toArray());
    }
}
