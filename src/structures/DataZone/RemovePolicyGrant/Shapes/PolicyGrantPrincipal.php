<?php

namespace Sunaoka\Aws\Structures\DataZone\RemovePolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserPolicyGrantPrincipal|null $user
 * @property GroupPolicyGrantPrincipal|null $group
 * @property ProjectPolicyGrantPrincipal|null $project
 * @property DomainUnitPolicyGrantPrincipal|null $domainUnit
 */
class PolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     user?: UserPolicyGrantPrincipal|null,
     *     group?: GroupPolicyGrantPrincipal|null,
     *     project?: ProjectPolicyGrantPrincipal|null,
     *     domainUnit?: DomainUnitPolicyGrantPrincipal|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
