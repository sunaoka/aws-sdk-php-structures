<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\AssessmentReportsDestination $assessmentReportsDestination
 * @property Shapes\Scope $scope
 * @property list<Shapes\Role> $roles
 * @property string $frameworkId
 * @property array<string, string>|null $tags
 */
class CreateAssessmentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     assessmentReportsDestination: Shapes\AssessmentReportsDestination,
     *     scope: Shapes\Scope,
     *     roles: list<Shapes\Role>,
     *     frameworkId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
