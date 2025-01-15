<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchImportEvidenceToAssessmentControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManualEvidence|null $manualEvidence
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class BatchImportEvidenceToAssessmentControlError extends Shape
{
    /**
     * @param array{
     *     manualEvidence?: ManualEvidence|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
