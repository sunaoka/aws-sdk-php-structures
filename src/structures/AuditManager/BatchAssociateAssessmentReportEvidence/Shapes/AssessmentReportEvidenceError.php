<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchAssociateAssessmentReportEvidence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $evidenceId
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class AssessmentReportEvidenceError extends Shape
{
    /**
     * @param array{
     *     evidenceId?: string|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
