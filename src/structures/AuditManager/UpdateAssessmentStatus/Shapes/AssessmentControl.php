<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property 'UNDER_REVIEW'|'REVIEWED'|'INACTIVE' $status
 * @property 'MANUAL'|'AUTOMATE'|'DEFER'|'IGNORE' $response
 * @property list<ControlComment> $comments
 * @property list<string> $evidenceSources
 * @property int $evidenceCount
 * @property int $assessmentReportEvidenceCount
 */
class AssessmentControl extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     description?: string,
     *     status?: 'UNDER_REVIEW'|'REVIEWED'|'INACTIVE',
     *     response?: 'MANUAL'|'AUTOMATE'|'DEFER'|'IGNORE',
     *     comments?: list<ControlComment>,
     *     evidenceSources?: list<string>,
     *     evidenceCount?: int,
     *     assessmentReportEvidenceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
