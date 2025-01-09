<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchImportEvidenceToAssessmentControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $controlSetId
 * @property string $controlId
 * @property list<Shapes\ManualEvidence> $manualEvidence
 */
class BatchImportEvidenceToAssessmentControlRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     controlSetId: string,
     *     controlId: string,
     *     manualEvidence: list<Shapes\ManualEvidence>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
