<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $assessmentName
 * @property string $assessmentDescription
 * @property Shapes\Scope $scope
 * @property Shapes\AssessmentReportsDestination $assessmentReportsDestination
 * @property list<Shapes\Role> $roles
 */
class UpdateAssessmentRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     assessmentName?: string,
     *     assessmentDescription?: string,
     *     scope: Shapes\Scope,
     *     assessmentReportsDestination?: Shapes\AssessmentReportsDestination,
     *     roles?: list<Shapes\Role>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
