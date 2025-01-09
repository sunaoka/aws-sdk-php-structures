<?php

namespace Sunaoka\Aws\Structures\DataZone\RemovePolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainUnitPolicyGrantPrincipal $domainUnit
 * @property GroupPolicyGrantPrincipal $group
 * @property ProjectPolicyGrantPrincipal $project
 * @property UserPolicyGrantPrincipal $user
 */
class PolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     domainUnit?: DomainUnitPolicyGrantPrincipal,
     *     group?: GroupPolicyGrantPrincipal,
     *     project?: ProjectPolicyGrantPrincipal,
     *     user?: UserPolicyGrantPrincipal
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
