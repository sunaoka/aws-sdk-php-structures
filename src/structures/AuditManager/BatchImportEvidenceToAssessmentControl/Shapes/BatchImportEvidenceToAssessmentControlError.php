<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchImportEvidenceToAssessmentControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManualEvidence $manualEvidence
 * @property string $errorCode
 * @property string $errorMessage
 */
class BatchImportEvidenceToAssessmentControlError extends Shape
{
    /**
     * @param array{
     *     manualEvidence?: ManualEvidence,
     *     errorCode?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
