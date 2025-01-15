<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvalActionName
 * @property string|null $EvalResourceName
 * @property 'allowed'|'explicitDeny'|'implicitDeny' $EvalDecision
 * @property list<Statement>|null $MatchedStatements
 * @property list<string>|null $MissingContextValues
 * @property OrganizationsDecisionDetail|null $OrganizationsDecisionDetail
 * @property PermissionsBoundaryDecisionDetail|null $PermissionsBoundaryDecisionDetail
 * @property array<string, 'allowed'|'explicitDeny'|'implicitDeny'>|null $EvalDecisionDetails
 * @property list<ResourceSpecificResult>|null $ResourceSpecificResults
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     EvalActionName: string,
     *     EvalResourceName?: string|null,
     *     EvalDecision: 'allowed'|'explicitDeny'|'implicitDeny',
     *     MatchedStatements?: list<Statement>|null,
     *     MissingContextValues?: list<string>|null,
     *     OrganizationsDecisionDetail?: OrganizationsDecisionDetail|null,
     *     PermissionsBoundaryDecisionDetail?: PermissionsBoundaryDecisionDetail|null,
     *     EvalDecisionDetails?: array<string, 'allowed'|'explicitDeny'|'implicitDeny'>|null,
     *     ResourceSpecificResults?: list<ResourceSpecificResult>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
