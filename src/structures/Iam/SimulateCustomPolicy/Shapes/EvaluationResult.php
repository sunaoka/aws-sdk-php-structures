<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvalActionName
 * @property string $EvalResourceName
 * @property 'allowed'|'explicitDeny'|'implicitDeny' $EvalDecision
 * @property list<Statement> $MatchedStatements
 * @property list<string> $MissingContextValues
 * @property OrganizationsDecisionDetail $OrganizationsDecisionDetail
 * @property PermissionsBoundaryDecisionDetail $PermissionsBoundaryDecisionDetail
 * @property array<string, 'allowed'|'explicitDeny'|'implicitDeny'> $EvalDecisionDetails
 * @property list<ResourceSpecificResult> $ResourceSpecificResults
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     EvalActionName: string,
     *     EvalResourceName?: string,
     *     EvalDecision: 'allowed'|'explicitDeny'|'implicitDeny',
     *     MatchedStatements?: list<Statement>,
     *     MissingContextValues?: list<string>,
     *     OrganizationsDecisionDetail?: OrganizationsDecisionDetail,
     *     PermissionsBoundaryDecisionDetail?: PermissionsBoundaryDecisionDetail,
     *     EvalDecisionDetails?: array<string, 'allowed'|'explicitDeny'|'implicitDeny'>,
     *     ResourceSpecificResults?: list<ResourceSpecificResult>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
