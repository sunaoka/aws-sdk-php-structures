<?php

namespace Sunaoka\Aws\Structures\Iam\SimulatePrincipalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvalResourceName
 * @property 'allowed'|'explicitDeny'|'implicitDeny' $EvalResourceDecision
 * @property list<Statement>|null $MatchedStatements
 * @property list<string>|null $MissingContextValues
 * @property array<string, 'allowed'|'explicitDeny'|'implicitDeny'>|null $EvalDecisionDetails
 * @property PermissionsBoundaryDecisionDetail|null $PermissionsBoundaryDecisionDetail
 */
class ResourceSpecificResult extends Shape
{
    /**
     * @param array{
     *     EvalResourceName: string,
     *     EvalResourceDecision: 'allowed'|'explicitDeny'|'implicitDeny',
     *     MatchedStatements?: list<Statement>|null,
     *     MissingContextValues?: list<string>|null,
     *     EvalDecisionDetails?: array<string, 'allowed'|'explicitDeny'|'implicitDeny'>|null,
     *     PermissionsBoundaryDecisionDetail?: PermissionsBoundaryDecisionDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
