<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentControlSetStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property 'UNDER_REVIEW'|'REVIEWED'|'INACTIVE'|null $status
 * @property 'MANUAL'|'AUTOMATE'|'DEFER'|'IGNORE'|null $response
 * @property list<ControlComment>|null $comments
 * @property list<string>|null $evidenceSources
 * @property int|null $evidenceCount
 * @property int|null $assessmentReportEvidenceCount
 */
class AssessmentControl extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     status?: 'UNDER_REVIEW'|'REVIEWED'|'INACTIVE'|null,
     *     response?: 'MANUAL'|'AUTOMATE'|'DEFER'|'IGNORE'|null,
     *     comments?: list<ControlComment>|null,
     *     evidenceSources?: list<string>|null,
     *     evidenceCount?: int|null,
     *     assessmentReportEvidenceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
