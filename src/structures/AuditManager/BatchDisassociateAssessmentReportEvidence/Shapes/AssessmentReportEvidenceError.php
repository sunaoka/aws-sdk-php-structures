<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchDisassociateAssessmentReportEvidence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $evidenceId
 * @property string $errorCode
 * @property string $errorMessage
 */
class AssessmentReportEvidenceError extends Shape
{
    /**
     * @param array{
     *     evidenceId?: string,
     *     errorCode?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
