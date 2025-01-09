<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchAssociateAssessmentReportEvidence;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $evidenceFolderId
 * @property list<string> $evidenceIds
 */
class BatchAssociateAssessmentReportEvidenceRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     evidenceFolderId: string,
     *     evidenceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
