<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'VPC_ENDPOINT'|'RESOURCE'|'PRINCIPAL'|'PERMISSIONS_BOUNDARY'|'SESSION' $checkType
 * @property 'ALLOW'|'NO_IMPACT'|'IMPLICIT_DENY'|'EXPLICIT_DENY' $evaluatedEffect
 * @property string|null $targetArn
 * @property list<'IDENTITY_BASED_POLICY'|'RESOURCE_BASED_POLICY'|'PERMISSIONS_BOUNDARY'|'SESSION_POLICY'|'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'VPC_ENDPOINT_POLICY'>|null $relevantPolicyTypes
 * @property list<MatchedPolicy>|null $matchedPolicies
 */
class Check extends Shape
{
    /**
     * @param array{
     *     checkType: 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'VPC_ENDPOINT'|'RESOURCE'|'PRINCIPAL'|'PERMISSIONS_BOUNDARY'|'SESSION',
     *     evaluatedEffect: 'ALLOW'|'NO_IMPACT'|'IMPLICIT_DENY'|'EXPLICIT_DENY',
     *     targetArn?: string|null,
     *     relevantPolicyTypes?: list<'IDENTITY_BASED_POLICY'|'RESOURCE_BASED_POLICY'|'PERMISSIONS_BOUNDARY'|'SESSION_POLICY'|'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'VPC_ENDPOINT_POLICY'>|null,
     *     matchedPolicies?: list<MatchedPolicy>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
