<?php

namespace Sunaoka\Aws\Structures\AuditManager\AssociateAssessmentReportEvidenceFolder;

trait AssociateAssessmentReportEvidenceFolderTrait
{
    /**
     * @param AssociateAssessmentReportEvidenceFolderRequest $args
     * @return AssociateAssessmentReportEvidenceFolderResponse
     */
    public function associateAssessmentReportEvidenceFolder(AssociateAssessmentReportEvidenceFolderRequest $args)
    {
        $result = parent::associateAssessmentReportEvidenceFolder($args->toArray());
        return new AssociateAssessmentReportEvidenceFolderResponse($result->toArray());
    }
}
