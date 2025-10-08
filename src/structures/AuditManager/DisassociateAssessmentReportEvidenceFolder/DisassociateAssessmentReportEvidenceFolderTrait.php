<?php

namespace Sunaoka\Aws\Structures\AuditManager\DisassociateAssessmentReportEvidenceFolder;

trait DisassociateAssessmentReportEvidenceFolderTrait
{
    /**
     * @param DisassociateAssessmentReportEvidenceFolderRequest $args
     * @return DisassociateAssessmentReportEvidenceFolderResponse
     */
    public function disassociateAssessmentReportEvidenceFolder(DisassociateAssessmentReportEvidenceFolderRequest $args)
    {
        $result = parent::disassociateAssessmentReportEvidenceFolder($args->toArray());
        return new DisassociateAssessmentReportEvidenceFolderResponse($result->toArray());
    }
}
