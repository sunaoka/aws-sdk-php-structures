<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property string $description
 * @property string $complianceType
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property AssessmentReportsDestination $assessmentReportsDestination
 * @property Scope $scope
 * @property list<Role> $roles
 * @property list<Delegation> $delegations
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdated
 */
class AssessmentMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     id?: string,
     *     description?: string,
     *     complianceType?: string,
     *     status?: 'ACTIVE'|'INACTIVE',
     *     assessmentReportsDestination?: AssessmentReportsDestination,
     *     scope?: Scope,
     *     roles?: list<Role>,
     *     delegations?: list<Delegation>,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdated?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
