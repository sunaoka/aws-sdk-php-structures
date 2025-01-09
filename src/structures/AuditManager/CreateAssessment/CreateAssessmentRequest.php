<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property Shapes\AssessmentReportsDestination $assessmentReportsDestination
 * @property Shapes\Scope $scope
 * @property list<Shapes\Role> $roles
 * @property string $frameworkId
 * @property array<string, string> $tags
 */
class CreateAssessmentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     assessmentReportsDestination: Shapes\AssessmentReportsDestination,
     *     scope: Shapes\Scope,
     *     roles: list<Shapes\Role>,
     *     frameworkId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
