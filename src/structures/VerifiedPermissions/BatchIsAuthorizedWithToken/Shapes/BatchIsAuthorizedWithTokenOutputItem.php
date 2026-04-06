<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchIsAuthorizedWithTokenInputItem $request
 * @property 'ALLOW'|'DENY' $decision
 * @property list<DeterminingPolicyItem> $determiningPolicies
 * @property list<EvaluationErrorItem> $errors
 */
class BatchIsAuthorizedWithTokenOutputItem extends Shape
{
    /**
     * @param array{
     *     request: BatchIsAuthorizedWithTokenInputItem,
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
