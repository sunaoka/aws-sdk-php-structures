<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvalResourceName
 * @property 'allowed'|'explicitDeny'|'implicitDeny' $EvalResourceDecision
 * @property list<Statement> $MatchedStatements
 * @property list<string> $MissingContextValues
 * @property array<string, 'allowed'|'explicitDeny'|'implicitDeny'> $EvalDecisionDetails
 * @property PermissionsBoundaryDecisionDetail $PermissionsBoundaryDecisionDetail
 */
class ResourceSpecificResult extends Shape
{
    /**
     * @param array{
     *     EvalResourceName: string,
     *     EvalResourceDecision: 'allowed'|'explicitDeny'|'implicitDeny',
     *     MatchedStatements?: list<Statement>,
     *     MissingContextValues?: list<string>,
     *     EvalDecisionDetails?: array<string, 'allowed'|'explicitDeny'|'implicitDeny'>,
     *     PermissionsBoundaryDecisionDetail?: PermissionsBoundaryDecisionDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
