<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Kind
 * @property string $Name
 * @property string $Uid
 * @property string $RoleRefName
 * @property string $RoleRefKind
 */
class KubernetesRoleBindingDetails extends Shape
{
    /**
     * @param array{
     *     Kind?: string,
     *     Name?: string,
     *     Uid?: string,
     *     RoleRefName?: string,
     *     RoleRefKind?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
