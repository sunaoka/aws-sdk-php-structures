<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property string|null $description
 * @property string|null $complianceType
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property AssessmentReportsDestination|null $assessmentReportsDestination
 * @property Scope|null $scope
 * @property list<Role>|null $roles
 * @property list<Delegation>|null $delegations
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 */
class AssessmentMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     description?: string|null,
     *     complianceType?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     assessmentReportsDestination?: AssessmentReportsDestination|null,
     *     scope?: Scope|null,
     *     roles?: list<Role>|null,
     *     delegations?: list<Delegation>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
