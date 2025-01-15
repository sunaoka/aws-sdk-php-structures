<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $description
 * @property 'ACTIVE'|'UNDER_REVIEW'|'REVIEWED'|null $status
 * @property list<Role>|null $roles
 * @property list<AssessmentControl>|null $controls
 * @property list<Delegation>|null $delegations
 * @property int|null $systemEvidenceCount
 * @property int|null $manualEvidenceCount
 */
class AssessmentControlSet extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     description?: string|null,
     *     status?: 'ACTIVE'|'UNDER_REVIEW'|'REVIEWED'|null,
     *     roles?: list<Role>|null,
     *     controls?: list<AssessmentControl>|null,
     *     delegations?: list<Delegation>|null,
     *     systemEvidenceCount?: int|null,
     *     manualEvidenceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
