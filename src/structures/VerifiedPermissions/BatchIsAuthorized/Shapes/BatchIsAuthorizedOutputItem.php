<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchIsAuthorizedInputItem $request
 * @property 'ALLOW'|'DENY' $decision
 * @property list<DeterminingPolicyItem> $determiningPolicies
 * @property list<EvaluationErrorItem> $errors
 */
class BatchIsAuthorizedOutputItem extends Shape
{
    /**
     * @param array{
     *     request: BatchIsAuthorizedInputItem,
     *     decision: 'ALLOW'|'DENY',
     *     determiningPolicies: list<DeterminingPolicyItem>,
     *     errors: list<EvaluationErrorItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
