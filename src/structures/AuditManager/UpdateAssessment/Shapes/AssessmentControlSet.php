<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $description
 * @property 'ACTIVE'|'UNDER_REVIEW'|'REVIEWED' $status
 * @property list<Role> $roles
 * @property list<AssessmentControl> $controls
 * @property list<Delegation> $delegations
 * @property int $systemEvidenceCount
 * @property int $manualEvidenceCount
 */
class AssessmentControlSet extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     description?: string,
     *     status?: 'ACTIVE'|'UNDER_REVIEW'|'REVIEWED',
     *     roles?: list<Role>,
     *     controls?: list<AssessmentControl>,
     *     delegations?: list<Delegation>,
     *     systemEvidenceCount?: int,
     *     manualEvidenceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
