<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Kind
 * @property string|null $Name
 * @property string|null $Uid
 * @property string|null $RoleRefName
 * @property string|null $RoleRefKind
 */
class KubernetesRoleBindingDetails extends Shape
{
    /**
     * @param array{
     *     Kind?: string|null,
     *     Name?: string|null,
     *     Uid?: string|null,
     *     RoleRefName?: string|null,
     *     RoleRefKind?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
