<?php

namespace Sunaoka\Aws\Structures\AuditManager\AssociateAssessmentReportEvidenceFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $evidenceFolderId
 */
class AssociateAssessmentReportEvidenceFolderRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     evidenceFolderId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
