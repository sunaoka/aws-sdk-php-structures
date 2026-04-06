<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainUnitPolicyGrantPrincipal|null $domainUnit
 * @property GroupPolicyGrantPrincipal|null $group
 * @property ProjectPolicyGrantPrincipal|null $project
 * @property UserPolicyGrantPrincipal|null $user
 */
class PolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     domainUnit?: DomainUnitPolicyGrantPrincipal|null,
     *     group?: GroupPolicyGrantPrincipal|null,
     *     project?: ProjectPolicyGrantPrincipal|null,
     *     user?: UserPolicyGrantPrincipal|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
