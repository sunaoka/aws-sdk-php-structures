<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $role
 * @property list<SsoIdentity> $identities
 */
class ArgoCdRoleMapping extends Shape
{
    /**
     * @param array{
     *     role: 'ADMIN'|'EDITOR'|'VIEWER',
     *     identities: list<SsoIdentity>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
