<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string|null $assessmentName
 * @property string|null $assessmentDescription
 * @property Shapes\Scope $scope
 * @property Shapes\AssessmentReportsDestination|null $assessmentReportsDestination
 * @property list<Shapes\Role>|null $roles
 */
class UpdateAssessmentRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     assessmentName?: string|null,
     *     assessmentDescription?: string|null,
     *     scope: Shapes\Scope,
     *     assessmentReportsDestination?: Shapes\AssessmentReportsDestination|null,
     *     roles?: list<Shapes\Role>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
